<?php

session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }

$uid=$_GET['uid'];
$amount=$_GET['amount'];
$pid=$_GET['pid'];

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Participants</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  </head>
  <body>
    <form action="book.php?uid=<?php echo $uid ?>" method="post">
      <h1>Add Participants</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Adults</strong></label>
        <input type="number" placeholder="Enter No of Adults"  max=5 min=1 name="adult" required>
        <br>
        <br>
        <br>
        <label for="psw"><strong>Childs</strong></label>
        <input type="number" placeholder="Enter No of Childs"  max=5 min=0 name="child">
        <input type="hidden" name="pid" value=<?php echo $pid ?> required >
        <input type="hidden" name="amount" value=<?php echo $amount ?> required>
      </div>
      <button type="submit">Proceed</button>
      <div class="container" style="background-color: #eee">
      </div>
    </form>
  </body>
</html>
<style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
     
    </style>