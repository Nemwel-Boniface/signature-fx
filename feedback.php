<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$email_from = 'nemweltrials@gmail.com';
$email_subject = "New form submition";

$email_body = "First name : $firstname.\n".
               "Last name : $lastname.\n".
                 "Visitors email : $email.\n".
                 "User message : $subject.\n";
 $to = "nemwelnyandoro20@gmail.com";

$headers =  "From : $email_from \r\n";

$headers =  "Reply to : $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location : index.html");


?>