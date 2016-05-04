function hideForm(){
    setTimeout(function(){
        $('.ls-form-group').hide();
        $('.ls-submit').hide();
    });
}
$(document).ready(function(){
   $('#lspopUp').bind('DOMSubtreeModified', function(){
       $(hideForm);
   }) 
});