<?php
    $to = "wilmotcorpeejr25@gmail.com"; // replace this mail with yours
    $from = $_SERVER['PHP_SELF']." ".$_POST["email"];
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $headers = "From: $from";
    $message = $_POST["message"];

    $body = "User Message \n";
    $body .= " \n\n\t fullName: ".$fullName;
    $body .= " \n\n\t Email: ".$email;
    $body .= " \n\n\t Subject: ".$subject;
    $body .= " \n\n\t Message: ".$message;

    if(mail($to, $subject, $body, $headers)){
        echo '<label class="success">Sent your <b>wilmotcorpeejr25@gmail.com</b></label>';
    }else{
        echo '<label class="error">Something went wrong! please try again.</label>';
    }
    