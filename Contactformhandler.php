<?php 
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $email_from='govindasharma1014@gmail.com';
    $email_subject="New form submission";
    $email_body="User Name:$name.\n".
                    "User Email:$visitor_email.\n".
                      "User Subject:$subject.\n".
                       "User Message:$message.\n";

$to="arpitgupta1014@gmail.com";

$headers="From: $email_from\r\n";
$headers .="Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html"); 
?>