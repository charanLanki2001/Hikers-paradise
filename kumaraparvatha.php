<?php 

session_start();
   
  
if(!isset($_SESSION['status'])) 
  {
      
     header("location: http://localhost/ProjectHike/index.php");
    
  }

$uid=$_GET['uid'];
include "php\dbconn.php";
$pid=$_GET['pid'];
$query="SELECT * FROM `packages` WHERE id=$pid";
$queryrun=mysqli_query($con,$query);
$data=mysqli_fetch_array($queryrun);
$amount=$data['amount'];

?>




<!DOCTYPE html>
<html>
<head>
 <title>Cards</title>
</head>

<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');
*{
	margin:0px;
	padding:0px;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}
.section{
	width: 100%;
	min-height: 100vh;
	background: linear-gradient(to top left, #ffffcc 0%, #66ccff 100%);;
}
.container{
	width: 80%;
	display: block;
	margin:auto;
	padding-top: 100px;
}
.content-section .content .button{
	margin-top: 30px;
}
.content
{
    font-family: 'Times New Roman', Times, serif;
}
.button
{
    text-align: center;
    background-color: rgba(53, 131, 111, 0.95);
     color: white;
     padding: 10px 50px;
     border: none;
     font-size: 25px;
      border-radius: 25px;        
     -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
                            -o-border-radius: 100px;
                            box-shadow: 7px 10px 12px rgb(36, 34, 34);
                            cursor: pointer;
                            transition: all .3s;
                            -webkit-transition: all .3s;
                            -moz-transition: all .3s;
                            -ms-transition: all .3s;
                            -o-transition: all .3s;                                            
}                      

</style>
<title>readitems</title>
<body>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>KUMARAPARVATHA TREK</h1>
				</div>
				<div class="content">
					
					<h3>KUMARA PARVATHA trekking ( Starting from Kukke Subrahmanya )</h3>
                     <h3>  " THE MOST CHALLENGING TREK OF WESTERN GHATS "</h3><br>
                       <p> Location - Pushpagiri wildlife reserve forest, Coorg & Dakshina Kannada districts.</p> 
                       <p> Dates : 2nd weekend of month(Friday evening - Monday morning)</p>
                       <p> (1st night departure from Bengaluru & 4th early morning back in Bengaluru )</p>
                       <h2>COST:-<?php echo $amount ?> RS Per person(Including Travel from & to Bangalore)</h2><br>
                      <h2>Cost includes :</h2><br>
<p>Travel from & to Bengaluru ( Non AC pushback seater)</p> 
 <p>Tent accommodation inside forest. ( We arrange tents directly at camping area, which is 7 kms hike from base, u don't have to carry the tents )</p> 
<p>**We provide only tents, you will have to bring your own blankets.**</p>
 <p>Access to Bathroom / Toilets for Saturday morning fresh up in a lodge & also on Sunday evening.</p>
 <p>5 basic veg meals ( Saturday breakfast, lunch & dinner. Sunday Breakfast & lunch )</p> 
 <p>Forest permit / ticket which is 350 rs per person.</p>
 <p>Trip Coordinator / trek lead from Incredible Karnataka team.</p><br>

 <h2>Highlights:</h2><br>
  <p>Trek distance - 12.5 + 12.5 kms ( Total 25 kms covered in one and half day ) </p>  
  <p>Kukke Subrahmanya Temple</p>  
  <p>Batrumane/Campsite</p> <br>               
                      <h2>Trip plan/Itinerary</h2><br>
                       
                      <h3>DAY1/ Friday </h3><br>

                       <p>Leave Bengaluru on Friday night at 10.00 P.M</p>
                       <P >Continue overnight journey </P></div><br>
                    <div class="daytwo">
                        
                        <h3>DAY2 / Saturday</h3><br>

                       <p> Reach Kukke Subrahmanya around 7 A.m. </p>
                        <P> Freshen up at lodge room  </P>
                        <P> Have breakfast. </p>
                       <p> Quick visit to Kukke temple. 
                        <P> Leave your main lagguage in the bus itself.</P>
                       <p > Start trekking ( 7 kms ) </p>
                        <P> Reach Bhatrumane / Campsite </P>
                        <p> Have food </p>
                        <p>-Back to Bangalore with lots of memories</p>
                         <p>> Roam around 
                            > Witness sunset near the campsite 
                            > Have dinner 
                            > Sleep early..</p><br>
                       
                        <h3>DAY 3 / sunday</h3><br>
                       
                         <p>Wake up very early morning at 4.30 A.M </p>
                         <p>Quick freshenup
                             >Have food</p>  
                         <p>Start trekking at 6.30 A.M</p> 
                         <p>Reach peak 10 A.M ( 6 kms )</p> 
                         <p>Start descending back ( 6 kms )</p> 
                         <p>Reach Bhatrumane / Campsite Round 2 P.M 
                             > Have food</p> 
                         <p>Start Descending towards Kukke ( 7 kms )</p> 
                         <p>Reach Kukke by 6.30 P.M</p> 
                         <p>Take your lagguages from the bus
                         >Freshup at lodge room
                         >Will Have dinner self sponsored dinner 
                         >Start journey towards Bengaluru 
                         >Reach Bengaluru early morning by 5 A.M ( Monday )</p><br>

                         <h2>Things to carry:</h2><br>

                         <P> >Track pant & T-shirt.</P>
                         <p> >Extra clothes / garments as per your requirement.</p>
                         <p> >Comfortable pair of shoes with good grip.</p>
                         <p> >Extra pair of footwear as per your requirement.</p>
                         <p> >Raincoat, Umbrella & Hat</p> 
                         <p> >Rain covers / plastic covers to cover your mobile / wallets if it rains during trek.</p>
                         <p> >Extra plastic covers / pouches to carry back your wet clothes / shoes etc.</p> 
                         <p> >A day bag / Small bag to carry during trek.</p> 
                         <p> >1 / 2 ltrs water bottle each.</p>
                         <p> >Snacks / dry fruits during trek ** not mandatory.</p>
                         <p> >Toiletries</p> 
                         <p> >Fully charged Power Bank if you already have. * Not mandatory</p>
                         <p> >A torch ( Even a small torch will do ) </P><br>
                         <a href="participants.php?uid=<?php echo $uid ?>&& amount=<?php echo $amount ?>&& pid=<?php echo $pid ?>">
                        <div class="button">
                            BOOK
                    </div></a>
                 </div>
                       
             </div>
	    </div>
	</div>
    
</body>
</html>