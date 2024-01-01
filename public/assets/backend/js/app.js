$(document).ready(function () {

    $(".accordion-content").hide();
    $(".accordion-title").click(function () {
        var $content = $(this).next(".accordion-content");

        // Hide all other open content sections
        $(".accordion-content").not($content).slideUp();
        $(".accordion-title").not(this).removeClass("active");
        $(".accordion-title")
            .not(this)
            .find(".rotated-icon")
            .removeClass("rotate-180");

        // Toggle the clicked content section
        $content.slideToggle();
        $(this).toggleClass("active");
        
        // Toggle the rotated icon within the clicked accordion title
        $(this).find(".rotated-icon").toggleClass("rotate-180");
    });

    //sidebar onclick active start
    $(document).ready(function() {
        $(".click-bg").click(function() {
            // Toggle the 'active' class to change styles
            $(".click-bg").removeClass("active");
            $(this).toggleClass("active");

        });
        
        
        
    });

    
    
});

// all model show functionality start

function handleShowModal(modalId){
    let modal = document.getElementById(modalId);
    modal.showModal();
}


function handleModalHide(modalId){
    let modal = document.getElementById(modalId);
    modal.close();
}


