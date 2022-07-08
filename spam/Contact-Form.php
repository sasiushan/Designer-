<?php
    $name= $_POST['name'];
    $customer_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "#";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $customer_email.\n".
                        "User Message: $message.\n";

    $to = "sasiushan16@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $customer_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: Contact.html");

 ?>   
