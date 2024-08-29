<?php
  include "php/dbconn.php";
  session_start();
   
  
   if(!isset($_SESSION['status'])) 
     {
         
        header("location: http://localhost/ProjectHike/index.php");
       
     }
   
 $uid=$_GET['uid'];
 $uidsearch="SELECT * FROM users WHERE id = '$uid'";
$uidrun=mysqli_query($con, $uidsearch);
$row6=mysqli_fetch_array($uidrun);
$u_name=$row6['name'];

   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ProjectHike/css/home.css">
    <link rel="stylesheet" href="css\toggle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <title>firstpage</title>
</head>
<body>
    <header>
    </section>
    <section class="header">
        <video autoplay loop class="video-background"muted plays-inline>
            <source src="../ProjectHike/prjvideo.mp4"type="video/mp4">
        </video>
    </section>
            <nav>
                <div class = "logo">
                    <h1>Travel</h1>
                </div>
                <li>
                    <a href="">HOME</a>
                </li>
                <li>
                    <a href="packages.php?uid=<?php echo $uid ?>">Packages</a>
                </li>
                <li>
                    <a href="about.php">ABOUT</a>
                </li>
                <li>
                    <a href="contact.php?uid=<?php echo $uid ?>">Contact us</a>
            
                </li>
               
            </nav>
            <div class="dropdown-item">
                <div class="imgBox" onclick="myFunction()">
                    <img src="../ProjectHike/images/user1.webp" alt="Pure Coding">
                </div>
                <div class="dropdown-content">
                    <div class="content">
                        <div class="name">User Profile</div>
                    </div>
                    <ul class="links">
                        <li><i class="fa fa-user" aria-hidden="true"></i> <?php echo $u_name ?></li>
                        <li><a href="editprofile.php?uid=<?php echo $uid ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a></li>
                        <li><a href="recent_bookings.php?uid=<?php echo $uid ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Recent Bookings</a></li>
                        <div class="divider"></div>
                        <li><a href="contact.php?uid=<?php echo $uid ?>"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
                        <div class="divider"></div>
                        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                    </ul>
                 </div>
              </div>
             <script>
                function menuToogle() {
                    const ToogleMenu = document.querySelector('.dropdown-content');
                    ToggleMenu.classList.toggle('active');
                }
            </script>
            <main>
                <section>
                    <h1>A journey of thousand miles begins with a single step</h1>
                    <h1>THANK YOU</h1>
                </section>
            </main>
           
                </header>
                
                </body>
                </html>
