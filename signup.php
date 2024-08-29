<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="css\signup.css">
</head>
<body>

<div class="wrapper">
  <div class="title">
    Register Here
  </div>
  <div class="social_media">
    <div class="item">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="item">
      <i class="fab fa-twitter"></i>
    </div>
    <div class="item">
      <i class="fab fa-google-plus-g"></i>
    </div>
  </div>
  <?php
  if(isset($_SESSION['status'])) 
          {
            echo $_SESSION['status'];
            
          }?>
  <form action="php\insertsignup.php" class="form" method="POST">
    <div class="input_field">
      <input type="text" name="name" placeholder="Name" class="input" required>
      <i class="fas fa-user"></i>
    </div>
    <div class="input_field">
      <input type="text" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" name="email" placeholder="Email" class="input" required>
      <i class="far fa-envelope"></i>
    </div>
    <div class="input_field">
      <input type="password" name="password" placeholder="Password" class="input" required>
      <i class="fas fa-lock"></i>
    </div>
    <div class="input_field">
      <input type="tel" pattern="[0-9]{10}" name="phone" placeholder="Mobile number" class="input" required>
      <i class="fa fa-mobile" aria-hidden="true"></i>
    </div>
    <div class="input_field">
      type your address
      <textarea class="input" name="address" placeholder="Describe yourself here..."  required>
        </textarea>
    </div>
    <div class="btn">
      <button name="submit">Register</button>
    </div>
  </form>
</div>	
	
</body>
</html>