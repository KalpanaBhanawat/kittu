<html>
	<head>
		<title>Restaurant</title>

		<link rel='stylesheet' href='css/style.css'/>
		<script type="text/javascript" src="js/a.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="js/b.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
	</head>
		<body>
			<div id='main'>
				<div id='header'>
					<img src='Images/Logo.jpg' height='100' width='160' style='float:left'>
					<br/>
					ONLINE BOOKING FOR RESTAURANT
				</div>
				<div>
					<table align='center' width='100%' border='0' cellspacing='0'>
						<tr>
							<td>
								<div  class='slideshow'>
									<img src='Images/84770f_a12227364e5243528062d02c0a03c4c0.jpg' height='200' width='1200'>
									<img src='Images/84770f_5fb7ede3836044a392366a78e96fec49.png' height='200' width='1200'>
									<img src='Images/84770f_d3e7177b995e4255aa14d8f185995ed5.jpg' height='200' width='1200'>
								</div>
							</td>
							
						</tr>
					</table>
				</div>
				<div id='menu'>
					<?php
					if(isset($_REQUEST["a"]) && isset($_REQUEST["b"]))
					{
						$city_name=$_REQUEST["a"];
						$res_name=$_REQUEST["b"];
					?>
					<table width='100%' align='center' cellspacing='0' cellpadding='10'>
					<tr>
						<td><a href='home.php' style='font-style:italic'>HOME </a></td>
						<td><a href='menu.php?a=<?php echo $city_name ?>&b=<?php echo $res_name ?>' 
								style='font-style:italic'> MENU </a></td>
						<td><a href='booking.php?a=<?php echo $city_name ?>&b=<?php echo $res_name ?>'
								style='font-style:italic'>BOOKING</a></td>
						<td><a href='gallery.php?a=<?php echo $city_name ?>&b=<?php echo $res_name ?>'
								style='font-style:italic'>GALLERY</a></td>
						<td><a href='event.php?a=<?php echo $city_name ?>&b=<?php echo $res_name ?>'
								style='font-style:italic'>EVENTS</a></td>
						<td><a href='blog.php?a=<?php echo $city_name ?>&b=<?php echo $res_name ?>'
								style='font-style:italic'>BLOG</a></td>
						<td><a href='contact.php?a=<?php echo $city_name ?>&b=<?php echo $res_name ?>'
								style='font-style:italic'>CONTACT</a></td>
						
					</tr>
					</table>
					<?php
					}
					?>
				</div>
				
				<div id='container'>
					