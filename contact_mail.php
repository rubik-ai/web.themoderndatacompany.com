<?php
    $toEmail = "andrius.kuciauskas@gmail.com";
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $companyName = $_POST["companyName"];
    $jobTitle = $_POST["jobTitle"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $reason = $_POST["reason"];
    $comment = $_POST["comment"];

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
    $subject  = 'Message from '. $firstName. ' '. $lastName;

    $mail_msg = '<html><body>';
    $mail_msg .= 'From: '. $firstName. ' '. $lastName. '</br>';
    $mail_msg .= '<h1 style="color:#f40;">Hi Jane!</h1>';
    $mail_msg .= 'Email: ' . $email . '</br>';
    $mail_msg .= 'Company name: '. $companyName. '</br>';
    $mail_msg .= 'Job title: '. $jobTitle. '</br>';
    $mail_msg .= 'Phone: '. $phone. '</br>';
    $mail_msg .= 'Reason: '. $reason. '</br>';
    $mail_msg .= 'Message: '. $comment;
    $mail_msg .= '</body></html>';

    if(!mail($toEmail, $subject, $mail_msg, $headers)){
        $errors[] = 'Error sending email.';
    }
?>