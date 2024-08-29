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
					<h1>KUDREMUKHA TREK</h1>
				</div>
				<div class="content">
					
					<h2>KUDREMUKHA TREKKING</h2>
                    <h3>    "The HORSE FACE Structured Peak"</h3>
                    <h3>The most famous trek of INDIA</h3><br>
                    <p>    Location -  Kudremukha peak, Chikmagalur district.</p>  
                    <p>    Date : 4th weekend of every month(Friday evening - Monday morning)</p>
                    <P>    (1st night departure from Bengaluru & 4th early morning back in Bengaluru )</P>
                    <h2>COST:-<?php echo $amount ?> RS Per person(Including Travel from & to Bangalore)</h2><br>
                    <h2>Cost includes :</h2><br>
                   <p> > Travel from & to Bengaluru ( Mini Luxury bus. Pushback Seater )</p>
<P> Homestay / Nature stay accommodation in rooms / Dormitory / tents on group sharing basis. Seperate for men and women.</P> 
<p>> 4 times veg food ( Saturday Breakfast, Lunch & dinner. Sunday Breakfast</p> 
<p>> Forest entry fees ( FYI - It's 600 rs per person and is included in total cost )</p>
<p> >Jeep charges ( Normal vehicles doesn't reach trek starting point, so will be arranging jeep)</p> 
<p>> Forest dpt approved local guide and trek lead from Incredible Karnataka team. / Trip coordinator.</p> 
<p>> Campfire if weather permits</p>
<p>> Reach to basic medicines and first aid.</p> <br>
 
<h2>Nick Names of KUDREMUKHA :</h2><br>
<p>" The king of landscapes "</p> 
<p>" The Himalayas of South "</p><br>

<h2>Highlights :</h2><br>
<p>> Shola grassland at it's beautiful best.</p>
<p>> Dense forest trail.</p>
<p>> Water streams.</p>
<p>> Gem of Western ghats</p> 
<p>> Elevation - 1894 mtrs </p>
<p>> Trek distance - 10 + 10 kms</p>
<p>> Difficulty level - Medium to Difficult</p>
<p>> Second day visit to Kalasa hanging bridge and quick stop at Samse tea estate.</p> <br>

<h2>Trip Plan/Itinerary:</h2><br>

                        <h3>Day 1/Friday</h3><br>
                        <p>> Departure from Bengaluru at 8 P.M from different pickup points.</p>
                        <p> Stop for self sponsored dinner around 10 P.M</p>
                       <p> > Continue overnight journey towards Kudremukha base.</p></div><br>
                    <div class="daytwo">
                        <h3>DAY2/Saturday</h3><br>
                       <p> > Reach Kudremukha base / Homestay by 5 A.M
                        > Quick freshup 
                        > Have breakfast
                        > Leave to Trek starting point by jeep
                        > Meanwhile the trip coordinator will arrange for the entry tickets.</p>
                        <p>> Start the trek around 8 A.M
                        > Continue the trek 
                        > Reach peak around 1-2 P.M 
                        > Have packed lunch at the peak</p>
                        <p>> Strat descending 
                        > Reach base before 5 P.M
                        > Reach Homestay by jeep.</p>
                        <p>> Fresh-up / Have bath
                        > Have some snacks & tea 
                        > Campfire if weather permits
                        > Have dinner 
                        > End of a memorable day</p><br>
                        
                        <h3>DAY3/Sunday</h3><br>
                        <p>> Wakeup early
                            > Get ready by 8 A.M 
                            > Have breakfast & check-out by 8.30 A.M</p>
                        <p>    > Start journey from there
                            > Quick stop at Samse tea estate take some quick pics .
                            > Head towards Kalasa hanging bridge.</p>
                         <p>   > Start journey back to Bengaluru
                            > Stop for a self sponsored lunch</p>
                         <p>   > Continue journey
                            > Stop for tea / Coffee 
                            > Continue journey 
                            > Reach Bengaluru by 8 P.M </p><br>

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