<?php
session_start();
include "php\dbconn.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//load composers autoloader
require "vendor/autoload.php";

if(isset($_POST['send']))
{
$email = $_POST['email'];
echo $email;
$uidsearch="SELECT * FROM users WHERE email = '$email'";
$uidrun=mysqli_query($con, $uidsearch);
$row6=mysqli_fetch_array($uidrun);
$uid =$row6['id'];
$u_email=$row6['email'];

$otp = rand(1000,9999);

if($row6['email'] == $email)
    { 

        $query = "UPDATE users SET otp = '$otp' WHERE id = $uid;";

			$data = mysqli_query($con, $query);
			// Now let's move the uploaded image into the folder: image

			if($data)
			{
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
                $mail->setFrom('Hikersparadise779@gmail.com');
                $mail->addAddress($email);     //Add a recipient
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'reset password';
                $email_template = "<h2>Hello USER,</h2>
                <h3>Here is Your One Time Password(OTP) to Reset your Login Password $otp Valid for 10 Minutes.   -HikersParadise.</h3> 
                <br/><br/>"; 
            
                $mail->Body    = $email_template;
                $mail->send();

                $_SESSION['otp'] = "enter otp ";

                header("location:otp.php?uid=$uid");

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
			mysqli_close($con);
    }
else
{
    $_SESSION['status'] = "no mail found";
    header("location: index.php");
    exit(0);
}
}
else if(isset($_POST['submit1']))
{
    $otp=$_POST['otp'];
    $uid=$_GET['uid'];
    $uidsearch="SELECT * FROM users WHERE id = '$uid'";
    $uidrun=mysqli_query($con, $uidsearch);
    $row6=mysqli_fetch_array($uidrun);
    $u_email=$row6['email'];
    $confotp=$row6['otp'];

    if($otp==$confotp)
    {
        header("location:changepassword.php?uid=$uid");
    }
    else
    {
        echo "otp does not match";
    }
}