$('#contact-submit').click(function(){
    $('#contact-form').validate();
    var data = {};
    //var data = $('contact-form').serialize();
    var form_elements = $('.form-control');
    form_elements.each(function() {
        data[$(this).attr('name')] = $(this).val();
    });
    $.ajax({
        type: 'POST',
        url: ajax_object.ajaxurl,
        data: data,
        dataType: 'json',
        success: function(){
            $('.form-group').fadeOut('fast');
            $('.success').show('slow');
        }
    });
    return false;
})