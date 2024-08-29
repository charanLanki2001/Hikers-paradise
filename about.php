<?php
 session_start();
   
  
 if(!isset($_SESSION['status'])) 
   {
	   
	  header("location: http://localhost/ProjectHike/index.php");
	 
   }
   ?>



<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="./css/about.css">
</head>	
<body>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h1>HIKERSPARADISE</h1>
					<p>Hiking is a long, vigorous walk, usually on trails or footpaths in the countryside.
					  Walking for pleasure developed in Europe during the eighteenth century.Religious pilgrimages
					  have existed much longer but they involve walking long distances for a spiritual purpose associated with specific religions.

						"Hiking" is the preferred term in Canada and the United States; the term "walking" is used in these regions for shorter,
						particularly urban walks. In the United Kingdom and the Republic of Ireland, the word "walking" describes all forms of walking,
						whether it is a walk in the park or backpacking in the Alps.
						The word hiking is also often used in the UK, along with rambling (a slightly old-fashioned term), hillwalking, and fell 
						walking (a term mostly used for hillwalking in northern England). The term bushwalking is endemic to Australia, having 
						been adopted by the Sydney Bush Walkers club in 1927.In New Zealand a long, vigorous walk or hike is called tramping.
						It is a popular activity with numerous hiking organizations worldwide, and studies suggest that all forms of walking have 
						health benefits.</p>
					<div class="button">
						<a href="">Read More</a>
					</div>
				</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="../ProjectHike/images/logo.png">
			</div>
		</div>
	</div>

	
</body>
</html>