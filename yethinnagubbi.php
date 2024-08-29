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
.content-section .content .button
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
					<h1>ETTHINA BHUJA </h1>
				</div>
				<div class="content">
					
					<h2>Etthina Bhuja sunrise trek ( Chikmagalur district ) & visit to waterfalls (Sakleshpura)</h2> <br>
                   
                    <P>DATES: 5th WEEKEND OF EVERY MONTH(Saturday evening - Sunday night)</P> 
                    <p> (1st night departure from Bengaluru & 2th late night(10 P.M) back in Bengaluru )</p>   
                    <h2>COST:-<?php echo $amount ?> RS Per person(Including Travel from & to Bangalore)</h2> <br>
                    <h2>Cost Includes:-</h2> <br>                 
                   <p> > Transportation from & to Bengaluru. Non AC seater.</p> 
                    <p>> Sunday morning Breakfast & Lunch</p>
                    <p>> Forest department approved local guide.</p> 
                    <p>** Local guide is mandatory as we will be trekking in the dark & the area is house for elephants,</p>
                    <p> presence of a trained local guide who knows every corner of the forest & elephant behaviour gives a secured feeling.</p> 
                    <p>> Trek lead / Co-ordinator</p> 
                    <p>> Guided trek to Etthina bhuja & Visit to waterfalls.</p> 
                    <p>> Access to toilet at base. ** No bathing option before or after the trek.</p><br> 
                    
                    <h3>** The place we are going is very remote and doesn't have any commercial properties ( Homestay / Resort / lodge ) nearby,</h3>
                    <h3> so have arranged access to toilet in a village house.**</h3> <br>

                       <h2>Highlights :</h2><br>
                       <p>** Trek distance - 2 + 2 kms.**</p>
                       <p>** This trek is easy & suitable even for beginners.**</p>
                       <p>** Witness the best Sunrise**</p><br>

                       <h2>Trip Plan/Itinerary:</h2><br>
                        <h3>Day 1/Saturday</h3><br>
                           <div class=day1 ><br>
                               <p>> Leave Bengaluru on Friday evening ie 30th Oct at 7.30 P.M .</p> 
                               <p>> Stop for self sponsored dinner around 9 P.M, continue journey.</p><br>
                           </div>
                    <div class="daytwo">
                        <h3>DAY2/Sunday</h3><br>
                        <p>> Reach base camp around 4 A.M</p>
                        <p>> Will spend one hour near the basecamp / Local guide's house.</p>
                             <p>Those who want to use toilets can use toilets & those who want to rest can sleep in vehicle itself.</p> 
                        <p>> Will leave the house at 5 A.M > Reach the trem starting point at 5.15 A.M</p>
                        <p>> Start the trek
                        > Reach peak around 6.30 A.M
                        > Witness Sunrise.</p> 
                        <p>> Spend time on the peak for 1 - 1.5 hours.</p> 
                        <p>> Start descending > Reach base / House around 9.30 A.M 
                        > Fresh-up
                        > Have breakfast > Take packed lunch</p>
                        <p>> Leave for waterfalls >  Reach around 12 P.M</p>
                        <p>> Play in the falls for 1 - 1.5 hours
                        > Have packed lunch at the falls</p>
                        <p>> Change the clothes inside the vehicle</p> 
                        <p>> Start the journey towards Bengaluru
                        <p>> Reach Bengaluru by 10 P.M</p><br>
                                
                            <h3>   ** Plz expect basic arrangements & this is an adventurous trip, come with an open mind to experience the best **</h3><br>

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
                         <p> >A torch ( Even a small torch will do ) </P>

                        <p>Transport:Non-A/C (According to group size TT or Bus)</p><br>
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