<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

            $name = $_POST['form_name'];
            $email = $_POST['form_email'];
            $message = $_POST['form_message'];
            $formcontent="From: $name \n Message: $message";
            $recipient = "mouthabang@gmail.com";
            $subject = "Portfolio Site";

            $mailheader = array("From: $recipient",
                        "Reply-To: replyto@example.com",
                        "X-Mailer: PHP/" . PHP_VERSION
                            );
            $mailheader = implode("\r\n", $mailheader);

              
            if( mail($recipient, $subject, $formcontent, $mailheader)) {
                echo "Message accepted";
            } else {
                echo "Error: Message not accepted";
            }
?>