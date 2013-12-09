<?php
///subscribe form
$recipient = "email@email.com"; ///  Your Email address
if (isset($_POST['email']))
  {
  //Send Mail To Webmaster
  $email = $_POST['email'] ;
  $subject = 'New Subscriber';
  $message =  $email . ' has been subscribed to your website.';
  mail("$recipient", $subject,
  $message, "From:" . $recipient);
 ;}
 ?>
 
<html>
	<head>
		<title>Essay Tutor</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script type="js/script.js"></script>
		<!--script src="js/login.js"></script>-->
	</head>
	<body>
		<!--Caution sign cause site is not up cause i'm lazy cause i'm tired right now-->
		<div class="caution-banner">
		<img src="./img/underConstruction.png">
			
		</div>
		<!--First Chunk-->
		<!--Hello! I'm Josh stuffs and transition to middle-->
		<div class="outer-background">
			<div class="upper-text">
				<h2>HELLO, I'M</h2>
				<h1>JOSH,</h1>
			</div>
			<div class="step-transition">
				<img src="img/step1.jpg">
			</div>
			
		</div>
		<!--Second Chunk-->
		<!--I'm an english major tutoring in some of the classics Graph (and some not-so-classics)-->
		<div class="second-chunk">
			<div class="second-chunk-text">
				<br><br><br><br><br>
				<h2>A</h2>
				<h1>WASHED UP</h1>	<br><br><br><br><br>
				<h2>ENGLISH MAJOR WHO TUTORS</h2><br><br><br><br><br><br><br><br><br><br>

				<h1>ESSAY WRITING</h1>
				<h2>AND</h2>
				<h1>LITERATURE ANALYSIS</h1><br><br><br><br><br>

				<h2>USING</h2>
				<h1 style="display:inline">GOOGLE DRIVE</h1><img src="./img/darkdrive-512.png">
				
		<!--Calender-->
		<!--Transition to bottom & I'm free ______-->
				<div class="schedule-box">
					<div class="date-text">
						<h1 id="date-title">  I'M FREE ON...</h1>
					</div>
					<div class="calender">
						<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=4egsnl6cmtjrhnajhtpo2pn1n8%40group.calendar.google.com&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
					</div>
				</div>
			</div>
		</div>
			<div class="step-transition">
				<img src="img/step2.jpg">
			</div>
<form method="post" action="http://someurl.com" target="_new">
    <input name="name" value="" type="text" placeholder="Your First Name"  />
    <input name="from" value="" type="text"  placeholder="Your Best Email" />
    <input type="image" name="image" src="../img/end.svg" type="submit" />
</form>
	</body>
</html>