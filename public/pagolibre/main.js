$(document).ready(function () {
    
    $('.closeBtn').click(function (e) {         
        $(this).parents('.row').fadeOut(400);
    });

    $('input[type=radio]').change(function() {
        $('#id').val(this.value);
    });

    $('#formSubmit').click(function (e) {         
        e.preventDefault();
        if($('#id').val() !="" ){
            $('#formPago').submit();
        }else{
            $('#error').fadeIn(400);
        }
        
    });
});