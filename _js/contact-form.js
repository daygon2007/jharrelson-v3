$('#contact-submit').click(function(){
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
            $('#contact-form').hide();
            console.log(data);
        }
    });
    return false;
})
