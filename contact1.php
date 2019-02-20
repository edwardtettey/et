<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$email_from='nyameye2018@gmail.com';
$email_subject= "new form submission";
$email_body= "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                        "User message: $message.\n";
$to= "edward@nyameyeedu.com";
$headers= "from :$email_from \r\n";
$headers= "reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:http://www.nyameyeedu.com/ed/contact2.html")
?>