function charCountFunction(msg_body){

  var str = msg_body.value;
  var regex = /[a-zA-Z0-9]/g;
  var char_count = str.length;
  var per_sms_count = 130;

  if(!/^[A-Za-z0-9 ()+!@#$%&*.,'";:<>?/_]*$/.test(str)){
    per_sms_count = 70;
  }

  $('#char-count').html(char_count);
  $('#msg-count').html(Math.ceil(char_count/per_sms_count));
}

function insertVariable(variable_name) {  

  if($('#type').val()==='panel_email_notification'){
    tinymce.activeEditor.execCommand('mceInsertContent', false, ' '+ variable_name + ' ');
  }else if($('#type').val()==='sms'){
    // $('#msg_body').append(variable_name + ' ');

    let textarea = document.getElementById("msg_body");
    let start_position = textarea.selectionStart;
    let end_position = textarea.selectionEnd;

    textarea.value = `${textarea.value.substring(
      0,
      start_position
    )}${variable_name}${textarea.value.substring(
      end_position,
      textarea.value.length
    )}`;
  }
}

function updatenotification(id, title, body, project_name){

  $('#notificationID').val(id);
  $('#titleEdit').val(title);
  $('#projectNameEdit').val(project_name);
  var choices = document.querySelectorAll('.choice-update');
  choices.forEach(function (element) {
    
      element.classList.remove('selected');
      if(element.innerHTML===project_name){
        element.classList.add('selected');
      }
  });
  $(tinymce.get('bodyEdit').getBody()).html(body);
}

function validateNotificationForm() {
    
  alertify.confirm('নিশ্চিতকরণ করুন', 'আপনি কি নোটিফিকেশানটি নিশ্চিত করছেন ?', 
    function(){ 
      document.getElementById("notification_entry_form").submit();
    }, 
    function(){ 
    }
  );

  return false;
}

function validateRecipientSubmission() {
    
  alertify.confirm('নিশ্চিতকরণ করুন', 'আপনি কি নোটিফিকেশান প্রাপক কে নিশ্চিত করছেন ?', 
    function(){ 

      var group_id = $('#groupid').val();
      var recipient_id = $('#recipient-select').val();

      $.ajax({
        url: APP_URL+"/notification/group/recipient/store",
        type: "post",
        contentType:'application/json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        delay: 250,
        data: JSON.stringify({
          group_id: group_id,
          recipient_id: recipient_id
        }),
        success: function (res) {
          console.log(res);
          alertify.success(res.message);
          // location.reload();

        },
        error: function(xhr, status, error) {
            const data = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);
            alertify.error(data.message);
        }
    });
    }, 
    function(){ 
    }
  );

  return false;
}

function validateNotificationFormatForm() {
    
  alertify.confirm('নিশ্চিতকরণ করুন', 'বিবরণী সংরক্ষণ করছেন ?', 
    function(){ 
      document.getElementById("notification_format_entry_form").submit();
    }, 
    function(){ 
    }
  );

  return false;
}

function loadGroupRecipients(choice, type){

  var choices = document.querySelectorAll('.choice');
  choices.forEach(function (element) {
  element.classList.remove('selected');
  });
  choice.classList.add('selected');
  $('#groupid').val(choice.id);

  if(type=='customized'){
    $('#recipient-add-area').prop('hidden',false);
  }else{
    $('#recipient-add-area').prop('hidden',true);
  }

  var table = $('#recipient-table').DataTable({
      processing: true,
      serverSide: true,
      bDestroy:   true,
      ajax: APP_URL+"/notification/recipient/group/manage/"+choice.id,
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'name',        name: 'name'},
          {data: 'address',     name: 'address'},
          {data: 'phone',       name: 'phone'},
          {data: 'email',       name: 'email'},
          {data: 'ldtax_holding_id',  name: 'ldtax_holding_id'},
          {data: 'third_year_due_demand',  name: 'third_year_due_demand'},
      ]
  });
}

function loadRecipientGroups(){

  $.ajax({
      url: APP_URL+"/notification/recipient/group/list",
      type: "get",
      contentType:'application/json',
      success: function (res) {

          console.log(res.recipient_list);
          var recipient_div_data = '';
          var editable_recipient_div_data = '';
          const recipients = res.recipient_list;

          recipients.forEach(function (element) {
            recipient_div_data += '<div class="item choice" onclick="selectChoice(this)" id="'+ element['id'] +'">'+ element['group_name'] +'</div>';
            editable_recipient_div_data += '<div class="item choice" onclick="loadGroupRecipients(this, `'+ element['type'] +'`)" id="'+ element['id'] +'">'+ element['group_name'] +'</div>';
          });
          recipient_div_data += '<div class="item modal-button choice-new" id="modal-add-recipient-button"><i class="bi bi-plus"></i> New </div>';
          
          $('#recipient_section').html(recipient_div_data);
          $('#editable_recipient_section').html(editable_recipient_div_data);

      },
      error: function(xhr, status, error) {
          const data = JSON.parse(xhr.responseText);
          console.log(xhr.responseText);
          alertify.error(data.message);
      }
  });
}

function loadFormatList(){

  var recipient_group_id = $('#recipient_group_id').val();

  if(recipient_group_id==''){
    recipient_group_id = 0;
  }

  $.ajax({
      url: APP_URL+"/notification/format/list/" + recipient_group_id,
      type: "get",
      contentType:'application/json',
      success: function (res) {

          console.log(res.format_list);

          var format_list_data = '';
          const formats = res.format_list;

          format_list_data += '<div class="col-sm-12 choice-format-new"><a href="/notification/format/add"><i class="bi bi-plus"></i> New </a> </div>';
          formats.forEach(function (element) {
            format_list_data += '<div class="col-sm-12 choice-format" onclick="selectedFormat(\''+ element['title'] +'\',\''+ element['type'] +'\',\''+ element['body'] +'\')" ><h5>'+ element['title'] + '</h5><span class="small text-muted">' + element['type'] + '</span><p>' +element['body'] + '</p>' + '</div>';
          });
          
          $('#notification_format_section').html(format_list_data);

      },
      error: function(xhr, status, error) {
          const data = JSON.parse(xhr.responseText);
          console.log(xhr.responseText);
          alertify.error(data.message);
      }
  });
}

function showModal(btn) {

  switch(btn) {
    case 'modal-format-button':
      $("#modal-format-list").removeClass("hidden");
      break;
    case 'modal-add-recipient-button':
      $("#modal-add-recipient").removeClass("hidden");
      break;
    default:
      // code block
  }
}

function hideModal(btn) {
  switch(btn) {
    case 'modal-format-button-close':
      $("#modal-format-list").addClass("hidden");
      break;
    case 'modal-add-recipient-button-close':
      $("#modal-add-recipient").addClass("hidden");
      break;
    default:
      // code block
  }
}

function selectedFormat(title, type, body){
  
  $('#title').val(title);
  $('#type').val(type);
  if($('#type').val()==='panel_email_notification'){
    $(tinymce.get('body').getBody()).html(body);
  }else if($('#type').val()==='sms'){
    editor_id = $("#body").attr('id');
    tinymce.get(editor_id).hide();
    $('#msg_body').prop('hidden', false);
    $('#msg_body').val(body);
  }
  $("#modal-format-list").addClass("hidden");
  alertify.success('নির্বাচিত বিবরণী প্রেরণের জন্যে প্রস্তুত');
}

function formatRepo (repo) {
  if (repo.loading) {
    return repo.text;
  }

  var $container = $(
    "<div class='select2-result-repository clearfix'>" +
      "<div class='select2-result-repository__meta'>" +
        "<span class='select2-result-repository__title'></span><span class='small text-muted float-right select2-result-repository__description'>" +
        "</div>" +
      "</div>" +
    "</div>"
  );

  $container.find(".select2-result-repository__title").text(repo.name  + ' (' + repo.address + ')');
  $container.find(".select2-result-repository__description").text(repo.phone);

  return $container;
}

function formatRepoSelection (repo) {
  
    return repo.name + ' (' + repo.address + ')';
  // alertify.success(repo.id);
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var content = this.nextElementSibling;
  if (content.style.maxHeight){
    content.style.maxHeight = null;
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
  } 
});
}


//         Document ready function started
//         loadRecipientGroups Datatable loads and recipient and edit form


$(document).ready(function() {

  loadRecipientGroups();

  $('#mouja-select').select2({
    ajax: {
      url: APP_URL + "/notification/mouja/list",
      dataType: 'json',
      delay: 250,
      data: function (params) {
        return {
          query: params.term,
          page: params.page
        };
      },
      processResults: function (data, params) {
        params.page = params.page || 1;
  
        return {
          results: $.map(data.items, function (item) {
            return {
                text: item.name_bd,
                id: item.id
            }
          }),
          pagination: {
            more: (params.page * 30) < data.total_count
          }
        };
      },
      cache: true
    },
    placeholder: 'Search Mouja',
    minimumInputLength: 1
  });

  
  $('#recipient-select').select2({
    ajax: {
      url: APP_URL + "/notification/recipient/list",
      dataType: 'json',
      delay: 250,
      data: function (params) {
        return {
          query: params.term,
          mouja_id: $('#mouja-select').val(),
          page: params.page,
        };
      },
      processResults: function (data, params) {
        params.page = params.page || 1;
  
        return {
          results: $.map(data.items, function (item) {
            return {
                text: item.name,
                id: item.id
            }
          }),
          pagination: {
            more: (params.page * 30) < data.total_count
          }
        };
      },
      cache: true
    },
    placeholder: 'Search Recipient'
    // minimumInputLength: 1,
    // templateResult: formatRepo,
    // templateSelection: formatRepoSelection
  });
  
  $('#modal-format-button').click(function() {
    loadFormatList();
  });

  $('#type').on('change', function() {
    if(this.value==='panel_email_notification'){
      editor_id = $("#body").attr('id');
      tinymce.get(editor_id).show();
      $('#msg_body').prop('hidden', true);
      $('#char-count-area').prop('hidden', true);
    }else{
      editor_id = $("#body").attr('id');
      tinymce.get(editor_id).hide();
      $('#msg_body').prop('hidden', false);
      $('#char-count-area').prop('hidden', false);
    }
  });

  $("#editForm").submit(function(e){

      e.preventDefault();
      var values = $('#editForm').serialize();

      // var additionalData = { _token: "{{ csrf_token() }}" };
      // var additionalDataJson = $.param(additionalData);
      // values += "&" + additionalDataJson;

      console.log(values);

      $.ajax({
          url: APP_URL+"/notification/update",
          type: "post",
          data: values ,
          success: function (res) {
              console.log(res);
              alertify.success(res.message);
              location.reload();
          },
          error: function(xhr, status, error) {
              const data = JSON.parse(xhr.responseText);
              console.log(xhr.responseText);
              alertify.error(data.message);
          }
      });
  })

  $("#recipientNameForm").submit(function(e){

    alertify.success('here');

    e.preventDefault();
    var values = $('#recipientNameForm').serialize();

    $.ajax({
        url: APP_URL+"/notification/recipient/add",
        type: "post",
        data: values ,
        success: function (res) {
            console.log(res);
            alertify.success(res.message);
            $("#modal-to-add-recipient .close").click();
            loadRecipientGroups();
        },
        error: function(xhr, status, error) {
            const data = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);
            alertify.error(data.message);
        }
    });
  })

  
  $( ".modal-button" ).on( "click", function() { showModal(this.id); });
  $( ".modal-button-close" ).on( "click", function() { hideModal(this.id); });

  $('#recipient_section').on('click', '.modal-button.choice-new', function() {showModal(this.id); });


});