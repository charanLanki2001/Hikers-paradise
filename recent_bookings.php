<?php
  session_start();
  include "php/dbconn.php";
  
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


<style>
    h1 {
    width:500px;
    margin: 0 auto;
    text-align: center;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ProjectHike/css/recent_bookings.css">
    <link rel="stylesheet" href="css\toggle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <title>firstpage</title>
</head>
<body>
    <header>
    </section>
    <section class="header">
        <video autoplay loop class="video-background"muted plays-inline>
            <source src=""type="">
        </video>
    </section>
            <nav>
                <div class = "logo">
                    <h2>Travel</h2>
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
            
            <form>
                <br>
                <br>
                <h1>Booking History</h1>
                <br>
                <br>
            <table>
  <tr>
    <th>Booking Date</th>
    <th>Name</th>
    <th>Payment ID</th>
    <th>Destination</th>
  </tr>

<?php
  $bookings = mysqli_query($con,"SELECT * FROM razorpay WHERE uid='$uid'"); // fetch data from database
    if($bookings)
    {
    while($data = mysqli_fetch_array($bookings))
    {
    ?>
  <tr>
    <td><?php echo $data['date_added'] ?></td>
    <td><?php echo $data['name'] ?></td>
    <td><?php echo $data['pay_id'] ?></td>
    <td><?php echo $data['pname'] ?></td>
  </tr>
 <?php
 }
}
else {
    echo "no bookings";
}
 ?>
</table>
           </form>
           
           
                </header>
                
                </body>
                </html>
