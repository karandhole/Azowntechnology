<?php
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');


$name= $_POST['form_name'];
$email = $_POST['form_email'];
 $subject = $_POST['form_subject'];
 $phone = $_POST['form_phone'];
 $message = $_POST['form_message'];

 $botcheck = $_POST['form_botcheck'];

 $mailheader="From: ".$name."<".$email.">\I\n";
 $recipient="psirdeshmukh44@gmail.com";

 mail($recipient,$subject,$message,$mailheader)
 or die("Error! Email not sent.");

 echo "Email sent successfully!";

 ?>