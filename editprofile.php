<?php
session_start();
include "php\dbconn.php";
$uid=$_GET['uid'];
if(!isset($_SESSION['status'])) 
     {
        header("location: http://localhost/ProjectHike/index.php");
       
     }
  $sql="SELECT * FROM `users` WHERE id='$uid'";
  $run=mysqli_query($con,$sql);
  $details=mysqli_fetch_array($run);
  $name=$details['name'];
  $email=$details['email'];
  $phone=$details['phone'];
  $address=$details['address'];   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Profile Page - Pure Coding</title>
</head>
<body class="profile-page">
    <div class="wrapper">
        <?php
            if(isset($_SESSION['update'])) 
            {
                echo $_SESSION['update'];
            }
        ?>
        <h2>Profile</h2>
        <form action="updatepassword.php?uid=<?php echo $uid ?>" method="post" enctype="multipart/form-data">
            
            <div class="inputBox">
                
                <input type="text" id="full_name" name="full_name" placeholder="Full Name" value="<?php echo $name ?>" disabled required>
            </div>
            <div class="inputBox">
                
                <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo $email ?>" disabled required>
            </div>
            <div class="inputBox">
                
                <input type="text" id="address" name="address" placeholder="address" value="<?php echo $address ?>" disabled required>
            </div>
            <div class="inputBox">
                
                <input type="phone" id="phone" name="phone" placeholder="Mobile number" value="<?php echo $phone ?>" disabled required>
            </div>
            <div class="inputBox">
                
                <input type="password" id="password" name="password" placeholder="Password" value="" required>
            </div>
            <div class="inputBox">
                
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="" required>
            </div>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
</body>
</html>
