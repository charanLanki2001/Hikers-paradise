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
					<h1>DUDSAGAR & DANDELI</h1>
				</div>
				<div class="content">
					
					<h2>***DUDHSAGAR & DANDELI ,the two names / destinations needs no introduction, such is the fame.***</h2> <br>
                    <h3>Head out on an adventurous trek to Dudhsagar falls, located on the eastern hinges of Goa's border.
                    Dudhsagar Falls, also known as the 'Sea of Milk', is a four-tiered waterfall located on the Mandovi 
                    River in the exotic, fun loving state of  Goa. The intimidating Dudhsagar Falls is amongst India's
                    tallest waterfalls with a height of 310m(1017 feet) and an average width of 30m (100 feet).
                    On your trek here, you will discover that the falls is located comfortably in the Bhagwan Mahaveer 
                    Sanctuary and Mollem National Park amongst the Western ghats and forms the border between Karnataka and Goa states</h3><br>
                    <P>DATES: 1ST WEEKEND OF EVERY MONTH(Friday evening - Monday morning</P> 
                    <p> (1st night departure from Bengaluru & 4th early morning back in Bengaluru )</p>   
                    <h2>COST:-<?php echo $amount ?>RS Per person(Including Travel from & to Bangalore)</h2> <br>
                    <h2>Cost Includes:-</h2>  <br>                
                       <p>> Transportation from & to Bengaluru. * NON AC Seater.
                       <p> > Homestay accommodation on a group sharing basis. ** Dormitory / Room / tents depending upon availability. Separate for Men & Women.</p>
                       <p> > 5 meals ( Saturday Breakfast, lunch & dinner. Sunday Breakfast & lunch. Tea / Coffee. ) For Saturday's dinner non veg option will be available too. All 4 other meals will be only veg.</p> 
                       <p> > Jeep ride till Dhudsagar falls ( 1+1 km trek from Jeep stop)</p>
                       <p> > Forest permit / Ticket.</p>
                       <p> > Life jacket</p> 
                       <p> > Water activities at Dandeli ( Kayaking, boating, natural Jacuzzi & Swimming ) ** Rafting not included in package, you can opt on your own if available on that particular day. Rafting availability depends upon dam water level.</p>
                       <p> > Campfire & music on Saturday night.</p><br>

                       <h2>Highlights :</h2><br>
                       <p>Offroading in OpenJeep</p>
                       <p>crossing small streams</p>
                       <p>water activities at kali river</p>
                       <p>A top view of Dudsagar water falls from the Base camp</p><br>

                       <h2>Trip Plan/Itinerary:</h2><br>
                        <h3>Day 1/Friday</h3><br>
                           <div class=day1 >
                               <p>> Leave Bengaluru on Friday evening ie 30th Oct at 7.30 P.M ** Journey is longer, hence leaving bit early compared to our other trips.</p> 
                               <p>> Stop for self sponsored dinner around 11 P.M, continue journey towards Molem ( A village near Dhudsagar falls )</p><br>
                           </div>
                    <div class="daytwo">
                        <h3>DAY2/Saturday</h3><br>
                        <p>> Reach Kulem around 7.30 - 8 A.M, quick freshen up at a hotel room. One room to boys & one room to girls will be given for freshen up.</p>
                           <p> (Note : As the stays ( Homestays & Resorts ) are very costly at Dhudsagar, all the organizers plan the stay in Dandeli & for freshen, usually public toilets are used, compared to that we are making better arrangement. **</p> 
                            <P>> Finish breakfast
                            > Jeep ride towards Dhudsagar falls.
                            > 1 km trek till falls from Jeep stop.</P>
                            <p>> Playtime at Dhudsagar with life jackets.</p> 
                            <p>> Jeep ride back to Kulem</p>
                            <p>> Lunch around 3 PM at a hotel.</p>
                            <p>> Start journey towards Dandeli homestay.</p> 
                            <p>> Check-in, freshup.</p>
                            <p>> Campfire & music.</p> 
                            <p>> Dinner & retire for the day.</p><br>

                            <h3>DAY3/Sunday</h3><br>
                            <p>> Wake up early morning, freshen up, finish Breakfast, leave for Ganesh gudi ( Kali river ) where water activities happen.</p>
                            <p>    > Water sports activities till afternoon.</p> 
                            <p>    > Have lunch & leave Kali river Backwaters.</p> 
                            <p>    > Departure from Dandeli</p>
                            <p>    > Stop for self sponsored dinner.</p>
                                
                            <p>   > Reach Bengaluru early morning on Monday. </p><br>
                                
                            <h3>   ** Plz expect basic arrangements & this is an adventurous trip, come with an open mind to experience the best ** </h3><br>

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