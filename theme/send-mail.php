<?php

if (isset($_POST['name'])){
    
    $input_name = strip_tags($_POST['name']);
    $input_email = strip_tags($_POST['email']);
    $input_subject = strip_tags($_POST['subject']);
    $input_message = strip_tags($_POST['message']);
    
    if(validate_email($input_email) && !empty($input_name) && !empty($input_subject)&& !empty($input_message)){
        if(mail(get_option('admin_email')), $input_subject, $input_message, "From: $input_email"){
            echo 'Your emailhas been sent. Thank You';
        }else{
            echo 'Problem sending email';
        }
    }else{
        echo 'Please fill out all fields and make sure your email is valid.';
    }
    
}else{
    echo 'Form must be properly submited';
}

function validate_email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>