$('#scroll_down').click(function(){
    $('html, body').animate({scrollTop:$(document).height()}, 35000);
    $(this).fadeOut();
    return false;
});