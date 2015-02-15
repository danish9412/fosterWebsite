<?php 
$ToEmail = 'jcnasa@gmail.com'; 
$EmailSubject = $_POST["subjectofperson"]; 
$mailheader = "From: ".$_POST["emailofperson"]. ; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["nameofperson"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["emailofperson"]."<br>"; 
$MESSAGE_BODY .= "Organisation: ".$_POST["orgofperson"]."<br>";
$MESSAGE_BODY .= "Location: ".$_POST["locofperson"]."<br>";
$MESSAGE_BODY .= "Message: ".nl2br($_POST["messageofperson"])."<br>"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure! Try again."); 
echo "Message recorded. We will get back to you soon" . "-" . "<a href='www.fostertraining.in' style='text-decoration:none;color:#ff0099;'>Click here to return</a>";
?>