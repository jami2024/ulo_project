<div class="modal fade" id="modal-to-update" tabindex="-1" role="dialog" aria-labelledby="update-modal-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="editForm" onsubmit="return false;">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="update-modal-title" id="update-modal-label">নোটিফিকেশান তথ্য আপডেট করুন</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titleEdit" class="form-label">নোটিফিকেশান শিরোনাম</label>
                        <input type="hidden" name="notificationID" id="notificationID" class="form-control"/>
                        <input type="text" name="titleEdit" id="titleEdit" class="form-control"/>
                    </div>
                    <div class="mb-3">
                        <label for="scrollable-container" class="form-label">নোটিফিকেশান প্রাপক গ্রুপ</label>
                        <div class="scrollable-container">
                            <div class="scrollable-content" id="editable_recipient_section"></div>
                            <input type="hidden" name="projectNameEdit" id="projectNameEdit">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bodyEdit" class="form-label">নোটিফিকেশান বিবরণী</label>
                        <textarea name="bodyEdit" id="bodyEdit" class="tinymce-editor form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">বাতিল</button>
                    <button type="submit" class="btn btn-primary">সংরক্ষণ</button>
                </div>
                <script>
                    function selectUpdateChoice(choice) {
                        var choices = document.querySelectorAll('.choice-update');
                        choices.forEach(function (element) {
                            element.classList.remove('selected');
                        });
                        choice.classList.add('selected');
                        document.getElementById('projectNameEdit').value = choice.innerText;
                    }
                </script>
            </div>
        </form>
    </div>
</div>