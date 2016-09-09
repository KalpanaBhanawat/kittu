<?php

?>
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
					<a href=''><img src='Images/search5.png' height='18' width='18' style='float:right'></a>
					<a href='httpP://twit.com'><img src='Images/twiter.png' height='20' width='20' 
								style='float:right'></a>
					<a href='httpP://facebook.com'><img src='Images/facebook.png' height='20' width='20' 
								style='float:right'></a>
				<span style='float:left;font-size:10pt;color:black'>Email Id : onlinerestaurant@gmail.com</span>
					<br/><span style='font-weight:bold;font-size:23pt'>ONLINE BOOKING FOR RESTAURANT</span>
				</div>
				<div>
					<table align='center' width='100%' border='0' cellspacing='0'>
						<tr>
							<td width='400'>
								<div  class='slideshow'>
									<img src='Images/84770f_a12227364e5243528062d02c0a03c4c0.jpg' height='200' width='1200'>
									<img src='Images/84770f_5fb7ede3836044a392366a78e96fec49.png' height='200' width='1200'>
									<img src='Images/84770f_d3e7177b995e4255aa14d8f185995ed5.jpg' height='200' width='1200'>
								</div>
							</td>
						</tr>
					</table>
			
				</div>
				<div id='container'>
					
<?php
	include('db.php');
	$r=mysql_query("select * from cafename");
	
?>
<br/>
	
<?php
	echo"<h2 style='font-weight:bold;font-style:italic'>&nbsp; &nbsp;Welcome to our site!!!</h2>";
	echo"<table border='0' align='center' cellspacing='0' cellpadding='0' width='90%'>";
		$count=0;
		while($row=mysql_fetch_array($r))
		{
			echo "<td style='border:2px solid black;font-size:14pt;color:SandyBrown;font-weight:bold;
						font-style:italic' width='40%'  align='center'>
			<a href='view_desc.php?a=$row[1]&b=$row[2]'>
			
			<image src='admin/res_photo/$row[3]' height=180  width='100%'><br/>
			</a>
			
			$row[2]<br/>$row[1]</td><td>&nbsp;</td>";
			$count++;
			if($count==2)
			{
				echo "</tr><tr><td colspan='3'>&nbsp;</td></tr>";
				$count=0;
			}
		}
		echo"</table>";
		?>
		<br/><br/>
		<p style='color:BurlyWood;font-size:25pt;font-style:italic;text-align:center'>
				"I'm a testimonial. Click to edit me
					and <br/>add text that says something nice
					<br/>about you and your services."
						<a href='read.php' style='color:black;text-align:center;font-size:13pt;
							text-decoration:underline'>Read More</a></p>
							
	</div>
		<div id='right'>
					<br/>
					<br/>
					<table border='0' align='center' cellspacing='0'>
					<tr>
						<td><br/>
						
								<span style='font-size:11pt'>OUR RESTAURANT</span></br/>
								<p>
									<span style='font-style:italic;font-size:20pt;color:BurlyWood'>
									Local fresh cuisine for everyone</span></p>
					
					<p style='font-size:13pt'>
					I'm a paragraph. Click here to add your own text and edit me. It's easy. 
					Just click "Edit Text" or double click me to add your own content and make changes to the font. 
					Feel free to drag and drop me anywhere you like on your page. 

							</p>
						</td>
					</tr>
						
						<tr>
							<td><br/><br/>
									<span style='font-size:18pt;color:BurlyWood;
											font-style:italic'>News...</span>
									<p style='font-size:13pt'>
										1. Quick services restaurants close 80 outlets in 18 months due to 
										slowdown in consumer spends.
									</p>
							</td>
						</tr>
						<tr>
							<td><br/>
								<p style='font-size:13pt'>
									2. Indian food scene catches restaurant group Le Cirque`s fancy.
								</p>
							</td>
						</tr>
						<tr>
							<td><br/>
								<p style='font-size:13pt'>
									3. Startup restaurant chain Sattviko creates a niche with fusion vegetarian 
											cuisine.
								</p>
							</td>
						</tr>
						<tr>
							<td><br/>
								<p style='font-size:13pt'>
									4. India joins the debate on forking out extra at restaurants.
								</p>
							</td>
						</tr>
						<tr>
							<td><br/>
								<p style='font-size:13pt'>
									5. To cut costs, online restaurant and food delivery company pulls out 
										of 9 markets.
								</p>
							</td>
						</tr>
						<tr>
							<td><br/>
								<p style='font-size:13pt'>
									6. Indian Accent, Online Booking  again the best restaurant website of India.
								</p>
							</td>
						</tr>
					</table>
				</div>		
				<div id='Footer'>
					
					 <span style='font-size:15pt'>&copy; CopyRight Of Online Restaurant 2016-2017</span></br/>
					 <a href='home.php' style='color:LightSalmon;font-size:14pt'>Home</a>&nbsp;
					<a href='contactus.php' style='color:LightSalmon;font-size:14pt'>Contact Us</a>&nbsp;
					<a href='aboutus.php' style='color:LightSalmon;font-size:14pt'>About Us</a>&nbsp;
					<a href='feedback.php' style='color:LightSalmon;font-size:14pt'>Feedback</a>&nbsp;
					<a href='faq.php' style='color:LightSalmon;font-size:14pt'>Faq</a>&nbsp;
					<a href='privacy.php' style='color:LightSalmon;font-size:14pt'>Privacy Policy</a>&nbsp;
					<br/> 
					<a href='httpP://google.com'><img src='Images/google.png' height='30' width='30'></a>&nbsp;
					<a href='httpP://facebook.com'><img src='Images/W7gYg.jpg' height='30' width='30'></a>&nbsp;
					<a href='httpP://twit.com'><img src='Images/twit.png' height='30' width='30'></a>&nbsp;
					<a href='httpP://youtube.com'><img src='Images/youtube.png' height='30' width='30'></a>&nbsp;
					
				</div>
				
			</div>
		</body>
</html>
<script src='jquery-1.8.0.min.js'></script>
<script>
	var lefts=$("#container").height();
	var rights=$("#right").height();
	
	if(lefts>rights)
		$("#right").height(lefts);
	else
		$("#container").height(rights);
	
</script>