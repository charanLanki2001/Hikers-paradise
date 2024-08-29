<?php

session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }
$uid=$_GET['uid'];


?>


<!DOCTYPE html>
<html>
<head>
 <title>Cards</title>
</head>

<style type="text/css">


*{
 margin: 0;
 padding: 0px;
}
body{
 font-family: arial;
 background :linear-gradient(to top left, #ffffcc 0%, #66ccff 100%);
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
     margin: 10px;;
    }

.image img{
   height: 200px;
  width: 100%;
  border-top-right-radius: 1px;
  border-top-left-radius: 5px;
   object-fit: cover;
  outline: ridge;
  outline-style: hidden;
  outline-width:medium;
 
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  color: rgb(253, 253, 253);
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
   color:black;
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid rgb(42, 207, 27);
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: rgb(88, 192, 39);
  color: white;
  transition: .5s;
  cursor: pointer;
}
.pack{
   text-transform: uppercase;
	font-size: 50px;
   color:rgb(15, 15, 15);
   background: #00ffff
   text-align: center;
}

</style>
<body>
   <div class="pack">
     <h5> Packages </h5>
   </div>

<div class="main">

 <!--cards -->

<div class="card">

<div class="image">
   <img src="../ProjectHike/images/dudsagar.png">
</div>
<div class="title">
 <h1>DUDSAGAR & DANDELI</h1>
</div>
<div class="des">
 <p>...SEA OF MILK...</p>
 <p>.</p>
<a href="../ProjectHike/readdudsagar.php?uid=<?php echo $uid ?>&pid=<?php echo 1?>"><button>Read More...</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="../ProjectHike/images/kumaraparavatha.png">
</div>
<div class="title">
 <h1>KUMARAPARVATHA</h1>
</div>
<div class="des">
 <p>HIGHEST & CHALLENGING</p> 
 <P>PEAK IN SOUTH INDIA...</p>
<a href="kumaraparvatha.php?uid=<?php echo $uid ?>&pid=<?php echo 2?>"><button>Read More...</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="../ProjectHike/images/kodachadri.png">
</div>
<div class="title">
 <h1>KODACHADRI</h1>
</div>
<div class="des">
 <p>...SARVAJNA PEETHA...</p>
 <p>.</p>
<a href="kodachadri.php?uid=<?php echo $uid ?>&pid=<?php echo 3 ?>"><button>Read More...</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="../ProjectHike/images/kkudre.png">
</div>
<div class="title">
 <h1>KUDREMUKHA </h1>
</div>
<div class="des">
 <p>HORSE FACED STRUCTURED PEAK...</p>
<a href="kudareymukka.php?uid=<?php echo $uid ?>&pid=<?php echo 4 ?>"><button>Read More...</button></a>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="../ProjectHike/images/eethinabujja.png">
</div>
<div class="title">
 <h1>
ETTINA BHUJA </h1>
</div>
<div class="des">
 <p>TWIN TREKKING...</p>
<a href="yethinnagubbi.php?uid=<?php echo $uid ?>&pid=<?php echo 5?>"><button>Read More...</button></a>
</div>
</div>
</div>
</body>
</html>