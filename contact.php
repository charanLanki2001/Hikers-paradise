<?php

session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }

include "php\dbconn.php";
$uid=$_GET['uid'];

  $sql="SELECT * FROM `users` WHERE id='$uid'";
  $run=mysqli_query($con,$sql);
  $details=mysqli_fetch_array($run);
  $name=$details['name'];
  $email=$details['email'];
  $phone=$details['phone'];
  $address=$details['address'];   

?>



<!DOCTYPE html>
  
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Contact Us Form  | CodingLab </title>
    <link rel="stylesheet" href="../ProjectHike/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surana collage</div>
          <div class="text-two">Peenya Banglore -563001</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">9353872293</div>
          <div class="text-two">8971133320</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">Hikersparadise779@gmsil.com</div>
          <div class="text-two">suranacollagepeenya@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
      <?php 
      if(!isset($_SESSION['status'])) 
     {
        header("location: http://localhost/ProjectHike/index.php");
       
     }
     else
    {
       if(isset($_SESSION['contact']))
       {
         echo $_SESSION['contact'];
         unset($_SESSION['contact']);   
       }
    }
    ?>
        <div class="topic-text">Send us a message</div>
        <p>If you need any help or any type of queries/updates related to our website/packages, you can contact/ send us a message from here. It's our pleasure to help you.</p>
        <p>Give Us a Valueable Feedback,Your Feedback Means a Lot to us.</p>
      <form action="contactbackend.php?uid=<?php echo $uid ?>" method="post">
        <div class="input-box">
          <input type="text" value="<?php echo $name ?>" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" value="<?php echo $email ?>" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea name="message" placeholder="Enter your message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" name="emailsend" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>

</body>
</html>
