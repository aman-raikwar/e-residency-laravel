/*global $*/

function renderImage(input) {
    if(input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.display-picture').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    
    $('body').on('click', '.btnDelete', function () {
        if (confirm('Are you sure you want to delete this Record?')) {
            return true;
        } else {
            return false;
        }
    });

    $('.created-datepicker').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy'
    });
    
    $('.input-picture').on('change', function() {
       renderImage(this); 
    });
    
});