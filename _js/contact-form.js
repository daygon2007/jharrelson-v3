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
        action: 'contactForm_send',
        data: data,
        dataType: 'json',
        success: function(){
            $('.form-group').fadeOut('fast');
            $('.success').show('slow');
            console.log(data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
    }  
    });
    return false;
});