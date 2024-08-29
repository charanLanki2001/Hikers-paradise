<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
  
     
     <div class=marq>
   <marquee>
   WELCOME TO HIKERS PARADISE(EXPLORE THE WORLD WITH US)
 </marquee>
</div>

    <div class="container">
      <div class="wrapper">
        <div class="title"><span>USER LOGIN</span></div>
        <form action="php/connection.php" method="POST">
        <?php
        if(isset($_SESSION['status'])) 
          {
            echo $_SESSION['status'];
            unset($_SESSION['status']);   
          }
        
        ?>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
        
            <input type="password"name="pass" placeholder="Password" required>
          </div>
          <div class="pass"><a href="forgetpassword.php">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
