<?php

session_start();

$poster_username = $_SESSION["username"];
$poster_email = $_SESSION["email"];
$poster_phone = $_SESSION["phone"];
$question_input = $_POST["question_input"];

$email_from = "anupamraj493@gmail.com";

$email_subject = "Enthulearners' question.";

$email_body = "User Name: $poster_username.\n".
            "User Email: $poster_email.\n".
            "User Phone Number: $poster_phone.\n".
            "Question:  $question_input.\n";

$to = 'techresofdev@gmail.com';
$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $poster_email \r\n";

$mail_sender = mail($to,$email_subject,$email_body,$headers);

if (!$mail_sender){
    echo "Question posting failed..!!";
}
else{
    echo "Your question has been posted";
}


?>