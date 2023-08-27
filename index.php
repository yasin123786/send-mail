<?php
$to_email = "rehanwhynot123@gmail.com";
$subject = "Simple Email Test Please Work Please Work Please Work";
$body = "Hi, This is test email please work";
$headers = "From: yasinbhatti230@gmail.com";

if(mail($to_email, $subject, $body, $headers)) {
    echo "Email Is Send";
} else {
    echo "Email Failed";
}
?>