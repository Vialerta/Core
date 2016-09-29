<?php

function mailsender($email)
{

//validate email format
if (filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)) {
    // send te correct input values
    $to = $email; //get the TO email
    $subject = ''; //The subject to send
    $txt = ''; //Content and Body of Email (import from template)
    $headers = 'From: noreply@vialerta.cc'; //Headers
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers = 'Content-type:text/html;charset=UTF-8'."\r\n";

    //send all data
    mail($to, $subject, $message, $headers);
} else {
    die ("The ($email) email its wrong"); //if wrong show error
}
}
