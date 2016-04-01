$('#contact-submit').click(function(){
    var data = $('contact-form').serialize();
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