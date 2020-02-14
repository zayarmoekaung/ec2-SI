<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['subject'])     ||
   empty($_POST['message'])   ||
  
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'info@softintelligencemm.com'; // replace mail address you like 
$email_subject = "softintelligencemm.com website contact form:  $name";
$email_body = "You have received a new message from softintelligencemm.com website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail or Ph No: $email_address\n\nSubject: $subject\n\nMessage:\n$message";
$headers = "From: CTO@softintelligencemm.com\n"; // mail system can run on own hosting of softintellingence otherwise can reach spam box of yahoo mail
$headers = "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
