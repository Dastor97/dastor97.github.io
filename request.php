<?php 
$name = $_POST['name']; 
$email = $_POST['email'];  
$message = $_POST['message'];

$send = "Name: ".$name." Message: ".$message." Phone: ".$phone." email: ".$email; 


$to= "matiyshenko.ilia@gmail.com"; 
$from = "no-reply@mail.com";
$subject = "message for your site";  
$headers = "From: $from\r\nReply-To: $from\r\nContent-type: text/plain; charset=utf-8\r\n"; 
mail($to, $subject, $send, $headers); 

 
$redir = $_SERVER['HTTP_REFERER']; 


if (strpos($redir, "mail=1") === false) $redir .= "?mail=1#contact"; 

header("Location: $redir"); 
?>