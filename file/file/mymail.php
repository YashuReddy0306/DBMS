<?php

$subject= "this is a test";
$message= "hello delivered";
$headers = 'From: xpressdelivery65@gmail.com' ."\r\n" .
            'Reply-To: xpressdelivery65@gmail.com' . "\r\n" .
            'X-Mailer: PHP /' . phpversion();

$to= "2000rashmikeshari@gmail.com";

mail($to,$subject,$message,$headers);


if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}



?>