<?php 

session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }

include "php\dbconn.php";

$uid=$_GET['uid'];
$emailsearch= "SELECT * FROM users WHERE id = '$uid'";
$emailsearchrun=mysqli_query($con, $emailsearch);
$row1=mysqli_fetch_array($emailsearchrun);
$name=$row1['name'];
$email = $row1['email'];
$phone=$row1['phone'];
$amount=$_POST['amount'];
$per=$_POST['adult'];
$pid=$_POST['pid'];
$total=$amount * $per;
$adult=$per-1;


?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<title>Booking</title>
<link rel="stylesheet" href="css\book.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>


<div class="container">
<div class="container-time">
<h2 class="heading">OCCURS</h2>
<h3 class="heading-days">ONLY ON WEEKENDS</h3>
<p></p>
<p></p>

<h3 class="heading-days">Saturday and sunday</h3>
<p></p>
<p></p>

<hr>

<h4 class="heading-phone">Call Us: (+91)8971133320</h4>

<p></p>
<p></p>

<h4 class="heading-days">total amount: <?php echo $total ?></h4>
</div>

<div class="container-form">
<form action="payment.php">
<h2 class="heading heading-yellow">Booking Online</h2>

<div class="form-field">
<p>Your Name</p>
<input type="text" id="name" name="name" value="<?php echo $name ?>" placeholder="Your Name" required>
</div>
<div class="form-field">
<p>Your email</p>
<input type="email" id="email" value="<?php echo $email ?>" placeholder="Your email" required>
</div>
<div class="form-field">
<p>Address</p>
<input name="hi" class="hi" id="hi" type="text" required>
</div>
<div class="form-field">
<p>Contact Number</p>
<input type="tel"parrern="[0-9]{5}-[0-9]{5}" name="phone" value="<?php echo $phone ?>" required>
</div>
<div class="form-field">
</select>
</div>

<div class="detailsform">
    <p>Peoples?</p>
    <details>
        <br>
        <?php
        for($i=0;$i<$adult;$i++)
        {
        ?>
         <label>.name.</label>
        <input type="text" required>
        <br>
        <label>mobile</label>
        <input type="tel" pattern="[0-9]{5}-[0-9]{5}" required>
        <br>
        <br>
        <?php
        }
        ?>
    </details>
    </div>

<input type="button" class="btn" value="Pay Now" onclick="MakePayment()">
</form>
</div>
</div>
</body>
</html>

<script>
  function MakePayment(){
    var name=$("#name").val();
    var email=$("#email").val();
    var per=<?php echo $per ?>;
    var pid=<?php echo $pid ?>;
    var amount=<?php echo $total ?>;
    var uid=<?php echo $uid ?>;
    var options = {
    "key": "rzp_test_VHASVEk8wA0tMT", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": name,
    "description": "test transaction",
    "image": "http://localhost/projecthike/images/logo.png",
    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
         jQuery.ajax({
         type:"POST",
         url:"payment.php",
         data:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name+"&uid="+uid+"&email="+email+"&pid="+pid+"&per="+per,
        success:function(result)
        {
            location.href = 'http://localhost/ProjectHike/success.php?uid=<?php echo $uid ?>';
        }
         
        });
    },
    "prefill": {
        "name": "<?php echo $name;?>" ,
        "email": "<?php echo $email;?>",
        "contact": "<?php echo $phone;?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#6f68e3"
    }
};
var rzp1 = new Razorpay(options);
rzp1.open();

}
</script>