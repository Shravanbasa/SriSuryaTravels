<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$mobile= $_POST['mobile'];
$to = "basasravankumar@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $emailaddress . "\r\n Message =" . $message \r\n mobile =" . $mobile;
$headers = "From: basasravankumar@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>