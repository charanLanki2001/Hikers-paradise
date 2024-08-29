<?php

session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "php\dbconn.php";
//load composers autoloader
require "vendor/autoload.php";

if(isset($_POST['pay_id']))
{
    $pay_id= $_POST['pay_id'];
    $amount= $_POST['amount'];
    $name= $_POST['name'];
    $uid=$_POST['uid'];
    $email=$_POST['email'];
    $pid=$_POST['pid'];
    $per=$_POST['per'];
    $namequery="SELECT * FROM `packages` WHERE id= '$pid'";
    $namequeryrun=mysqli_query($con,$namequery);
    $pnamearray=mysqli_fetch_array($namequeryrun);
    $pname=$pnamearray['package_name'];

    $query = "INSERT INTO `razorpay`(`name`, `amount`, `pay_id`, `pay_status`, `date_added`, `uid`, `pname`, `persons`) VALUES ('$name', '$amount', '$pay_id', 'sucess', current_timestamp(),'$uid','$pname','$per');";
    mysqli_query($con, $query);
    
    if($query)
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
                $mail->Subject = 'Booking Confirmed';
                $email_template = "<h2>Hello USER,</h2>
                <h3>Your Booking for $pname Confirmed<h3> 
                <h3>Transaction ID:$pay_id</h3><br> 
                <p> Pls do follow the instruction Given in the description,For any quires related to booking pls Contact Us. </p><br>
                <h3> ***ALL JOURNEYS HAVE SECRET DESTINATION OF WHICH THE TRAVELER IS UNWARE.***</h3>
                <h3>                                                                        -HikersParadise.</h3>
                <br/><br/>"; 
            
                $mail->Body    = $email_template;
                $mail->send();
                } 
                catch (Exception $e) 
                {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    
                }
    }
}

?>