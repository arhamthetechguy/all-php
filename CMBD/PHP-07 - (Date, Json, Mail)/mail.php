<?php
//sending mail
$to = "freelancergafur@gmail.com";
$subject = "Test Mailing";
$message = "Test Mailing";
$from = "developrgafur@gmail.com";
$headers = "from: " . $from;
$sendingMail = mail($to, $subject, $message, $headers);

if($sendingMail){
    echo "Email sent successfully";
} else {
    echo "Email not sent";
}

?>