<?php

    // Here we get all the information from the fields sent over by the form.
    $email = $_POST['email'];

    $to = 'adel@emarket.ps';
    $subject = 'the subject';
    $message = ' Email: '.$email;


    $headers = "From: رسالة من الموقع <".$to.">". "\r\n" .
                      "Return-Path: Your company <adel@emarket.ps>\r\n".
                      "Reply-To: You company <".$to.">" . "\r\n" .
                      "MIME-Version: 1.0\r\n".
                      "Content-type: text/html; charset=iso-8859-1\r\n".
                      "X-Priority: 3\r\n" .
                      'X-Mailer: PHP/' . phpversion();

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // shis line checks that we have a valid email address
        mail($to, $subject, $message, $headers); // this method sends the mail.
        echo "success"; // success message
    }else{
        echo "error"; //error
    }


?>