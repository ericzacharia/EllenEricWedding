<?php

if(isset($_POST['email']) && $_POST['email'] != ''){
  $message_sent=false
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    // submit the form
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "ekzachar@syr.edu";
    // $to = "ellenandericwedding@gmail.com";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";
    mail($to,$messageSubject,$body);
    $message_sent = true;
  } 
  else {
    $invalid_class_name = "form-invalid";
  }
}

?>