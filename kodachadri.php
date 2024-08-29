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
	background: linear-gradient(to top left, #ffffcc 0%, #66ccff 100%);
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
					<h1>KODACHADRI TREK</h1>
				</div>
				<div class="content">
					
					<h2> <KODACHADRI TREKKING> </h2>
                    <h3>    "The BEST trek of Western Ghats "</h3><br>
                    <P>    Location - hosanagara taluk,shivamogga district(450 kms from bangalore).</P> 
                    <P>    Dates : 3RD weekend of every month(friday-monday morning)</P>
                    <P>    1st night departure from Bengaluru & 4th early morning back in Bengaluru )</P>
                    <h2>   COST:-<?php echo $amount ?> RS Per person(Including Travel from & to Bangalore)</h2> <br> 
                    <h2>Cost includes: </h2><br>
                    <p>> Travel from & to Bengaluru</p>
                    <p>    * Non AC Pushback Seater</p>
                    <p>   > Homestay / Nature stay Accommodation * Bigger rooms or Tents on group sharing basis. Seperate for men & women.</p> 
                    <p>   > 5 times veg food ( Saturday Breakfast, lunch & Dinner. Sunday breakfast & Lunch.  Tea / Coffee during stay, Saturday evening Snacks )</p>
                    <p>   > Forest permission fees ( FYI - It's 400 rs per person & is included in total cost )</p>
                    <p>   > Trip Coordinator / Trek lead from Incredible Karnataka team > Local guide</p>
                    <p>   > Campfire</p> 
                    <p>   > Reach to basic medicines & first aid. </p> <br>  

                    <h1>Highlights:</h1><br>
                    <p>* Elevation - 1343 meters </p>
                    <p>    * Trek distance : Up & down 18 kms. </p>
                    <p>    * Difficulty level : Medium - Difficult</p> 
                    <p>    * Famous for the dense forest trek, mind blowing views & pre historic importance</p>
                    <p>     ( Adi Shankaracharya meditated here & there is an ancient temple known as Sarvajna peetha dedicated to him )</p> 
                    <p>    * Hidlumane falls which is in between the trekking path that leads to Kodachadri peak.</p> 
                    <p>    * 16th century built Nagara fort & Devagange ponds ( Part of 2nd day's Itinerary )</p>
                     <p>   * 11th century built Kavaledurga fort located amid dense forest. ( Part of 2nd day's Itinerary )</p>
                       

                   <h2>Trip Plan/Itinerary:</h2> <br>
                        <h3>DAY1/Friday</h3><br>
                        <p>> Leave Bengaluru at 8.00 P.M. Pickup points mentioned below.</p> 
                        <p>    > Stop for self sponsored dinner </p>
                        <p>    > Continue overnight journey.</p><br>

                        <h3>DAY2/Saturday</h3><br>
                        <p>> Reach Kodachadri base / Stay location around 7 A.M</p>
                        <p>    > Quick Fresh up
                            > Have breakfast 
                            > Start the trek around 8.30 A.M</p>
                        <P>    > Reach Hidlumane falls, spend some time at the falls</P>
                        <p>    > Continue the trek towards Kodachadri peak</p> 
                        <p>    > In between have packed lunch.</p>
                        <p>    > Reach Kodachadri peak around 3 P.M</p>
                        <p>    > Start descending / returning to base.</p>
                        <p>    > Reach base camp / Stay location around 6.30 - 7 p.m, 
                            > Freshen up
                            > Have Tea / Coffee / snacks 
                            > Campfire 
                            > Dinner around 8.30 P.M 
                            > That's all for the day</p><br>

                            <h3>DAY3/Sunday</h3><br>
                            <p>> Wake up early 
                                > Freshen up > Get ready > pack your bags
                                > Have breakfast 
                                > Check-out from accommodation place around 8.30  A.M.</p>
                            <p>    > Head towards Devagange ponds, spend some time there.</p> 
                            <p>    > Leave for Nagara fort 
                                > Explore the fort in detail.</p>
                            <p>    > Start journey towards Kavaledurga
                                > Have lunch 
                                > Reach Kavaledurga & explore the whole place ( will have to walk 2-3 kms to cover whole area )</p>
                            <p>    > Start journey towards Bengaluru
                                > Stop for Self sponsored Dinner at Shivamogga.
                                > Finish dinner & continue journey towards Bengaluru
                                > Continue overnight journey,Reach Bangalore early morning.</p><br>

                                <h1>Things to carry:</h1><br>

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