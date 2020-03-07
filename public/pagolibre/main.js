$(document).ready(function () {
    
    $('.closeBtn').click(function (e) {         
        $(this).parents('.row').fadeOut(400);
    });
    
    $('input[type=radio]').change(function() {
        $('#id').value = this.value;
    });
});