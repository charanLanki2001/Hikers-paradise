<?php
session_start();
include "php\dbconn.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$uid= $_GET['uid'];

//load composers autoloader
require "vendor/autoload.php";

if(isset($_POST['emailsend']))
{
$email = $_POST['email'];
echo $email;
$name=$_POST['name'];
$message= $_POST['message'];

    $mail = new PHPMailer(true);
    //Server settings                     
       
try {   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Hikersparadise779@gmail.com';                     //SMTP username
    $mail->Password   = 'Travel@123';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to conect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email,$name);
    $mail->addAddress('Hikersparadise779@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'message';

    $mail->Body    = $message;
    $mail->send();

    $_SESSION['contact'] = "message sent successfully ";

    header("location:contact.php?uid=$uid");

    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
    }
}
else
{
echo "something went wrong";
}
