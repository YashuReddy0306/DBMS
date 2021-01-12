<?php

$subject= "this is a test";
$message= "hello I have done it";
$headers = 'From: xpressdelivery@gmail.com' ."\r\n" .
            'Reply-To: xpressdelivery@gmail.com' . "\r\n" .
            'X-Mailer: PHP /' . phpversion();

$to= "dileepkumarpal1995@gmail.com";

mail($to,$subject,$message,$headers);


if(mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    die('Failure: Email was not sent!');
}



?>