<?php
    // if (!defined('BASEPATH')) exit('No direct script access allowed');
    use PHPMailer\PHPMailer\PHPMailer;
    require "./vendor/autoload.php";
    require "./vendor/phpmailer/phpmailer/src/PHPMailer.php";
    class SendMail
    {
        function send($user,$subject,$body,$attachments){
            $mail = new PHPMailer;
            /*$mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );*/
            //Enable SMTP debugging. 
            $mail->SMTPDebug = 0;                               
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();            
            //Set SMTP host name       (gmail host:smtp.gmail.com)                   
            $mail->Host = "smtp.gmail.com";
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;                          
            //Provide username and password     
            $mail->Username = "pencaptech.networking@gmail.com";
            $mail->Password = "Password@156#";
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "tls";      //ssl
            //Set TCP port to connect to (gmail port:587)
            $mail->Port = 587;                                   

            $mail->From = $user['fromMail']; //"test@pencaptech.com";
            $mail->FromName = $user['name'];

            $mail->addAddress($user['toMail'], 'Hoddies');

            if(!empty($attachments) && is_array($attachments)){
                foreach($attachments as $attachment){
                    $mail->addAttachment($attachment);
                }
            }

            $mail->isHTML(true);

            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AltBody = "This is the plain text version of the email content";

            $mail_status = array();
            if(!$mail->send()) 
            {
                $mail_status['status'] = false;
                $mail_status['msg'] = "Mailer Error: " . $mail->ErrorInfo;
                return $mail_status;
            } 
            else 
            {
                $mail_status['status'] = true;
                $mail_status['msg'] = "Message has been sent successfully";
                return $mail_status;
            }
        }
    }
    /*$sm = new SendMail();
    $sm->send(['name'=>'rakesh','fromMail'=>'pencaptech.networking@gmail.com','toMail'=>'pencaptech.networking@gmail.com'],'Test mail code server','<h1>This is simple mail code</h1>',[]);*/
?>