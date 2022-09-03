<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  if(!empty($email) && !empty($message)){ //email and message is not empty
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //if email is valid
        $receiver = "rheamariebacus@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
        $sender = "From: $email";
        if(mail($receiver, $subject, $body, $sender)){
            echo "Your message has been sent.";
        } else{
            echo "Sorry, failed to send your message!";
        }
    } else {
        echo "Enter a valid email address!";
    }
  } else {
    echo "Email and password field is required!";
  }
?>