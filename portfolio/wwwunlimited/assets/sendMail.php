<?php

   $mail_to = "mouthabang@yahoo.com";

   $subject = 'Client Enquiry';
   $contactName = $_POST['fullname'];
   $message = $_POST['message'];
   $emailFrom = $_POST['email'];


   if ( empty($contactName) OR !filter_var($emailFrom, FILTER_VALIDATE_EMAIL) OR empty($message)) 
   {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
   } else
   {
        # Mail Content
        $content = "Name: $contactName\n";
        $content .= "Email: $emailFrom\n\n";
        $content .= "Message:\n$message\n";
        # email headers
        $headers = "From: $contactName;";
        # Send the email
        $success = mail($mail_to, $subject, $content, $headers);
        if($success) {
            http_response_code(200);
            echo "Thank you! Your message has been sent.";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }
    }

?>