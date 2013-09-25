<?php
if(isset($_POST['email']))
{
$to      = $_POST['email'];
$subject = $_POST['subject'];
$message =  $_POST['message']."\n - ".$_POST['fname']." ".$_POST['lname'];
$headers = 'From: '.$_POST['email']. "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "<h2>Message Sent </h2>";
}
?>