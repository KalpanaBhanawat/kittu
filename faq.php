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
				
				
				<div id='container'>
					
<body>

	<br/>
	
	
	
	<p style='color:BurlyWood;font-style:italic;font-size:22pt;text-align:left'>&nbsp;&nbsp;Restaurant FAQ...</p>
	
	
	<p style='font-weight:bold;font-size:12pt;text-align:left'>&nbsp;What are the hours for lunch and dinner?</p>
	<p style='font-size:12pt;text:align:left'>&nbsp;
In most cases, lunch is from 12 noon-2:30pm and the last order will have to be sent to the kitchen by 2pm.
Dinner hours are typically 8pm-10:30pm, and the last order sent to the kitchen by 10pm. 
	In the rare exception that a restaurant is open early for dinner at 7pm,
		that is considered the first seating and they'll need to seat the next guests by 9pm.</p>
<p style='font-weight:bold;font-size:12pt;text-align:left'>&nbsp;How far in advance should I make reservations?</p>
<p style='font-size:12pt;text:align:left'>&nbsp;
Each restaurant have their own rules some will take reservations months in advance,
 while others won't. 2-4 weeks minimum are the norm and as soon as possible, especially of popular restaurants.
 Your French-speaking hotel or apartment concierge will be extremely helpful to help get you the reservations
 you need in time. A good rule of thumb is to make dinner reservations as soon as your plane ticket and hotel
 have been booked.
 </p>

<p style='font-weight:bold;font-size:12pt;text-align:left'>&nbsp;What is the etiquette of tipping?</p>
<p style='font-size:12pt;text:align:left'>&nbsp;
Tips cannot be left on credit cards and must be left in cash.
Servers are paid a wage, but tips are still appreciated. How much to leave is not an easy rule since a cup of 
coffee at a cafe and a 200Rs. meal are different experiences.
For a light bite at a morning cafe, leave the extra coin given as change or round up the change and leave 
		a euro bill.
For restaurants, leave 10% and/or a bit more when the experience has been exceptional
</p>
<p style='font-weight:bold;font-size:12pt;text-align:left'>&nbsp;How do I get a refund?</p>
<p style='font-size:12pt;text:align:left'>&nbsp;
If you are dissatisfied with your order, please contact the restaurant directly to ask for a refund. 
The refund will then be applied to your credit or debit card. If you paid cash, you will be able to pick up your 
refund directly at the restaurant.
</p>
<p style='font-weight:bold;font-size:12pt;text-align:left'>&nbsp;Do you have a time guaranty?</p>
<p style='font-size:12pt;text-align:left'>&nbsp;
We don't have a time guaranty but do promise to deliver your order as soon as possible.
</p>
<p style='font-weight:bold;font-size:12pt;text-align:left'>&nbsp;How do I know when to expect my order 
		to be delivered?</p>
<p style='font-size:12pt;text-align:left'>&nbsp;
On the confirmation page, you can choose the time that you would like to have your order delivered. The delivery
time options in the drop-down begin at the earliest tie for possible delivery.
</p>

</body>
</div>
		<div id='right'>
					<table align='center' cellspacing='0'>
						
							<tr>
								<td><BR/><img src='Images/coffee.jpg' height='300' width='250'></td>
							</tr>
							<tr>
								<td><img src='Images/images2.jpg' height='300' width='250'></td>
							</tr>
								
					</table>
				</div>		
				<div id='Footer'>
					 <span style='font-size:15pt'>&copy; CopyRight Of Online Restaurant 2016-2017</span></br/>
					<a href='home.php' style='color:LightSalmon;font-size:14pt'>Home</a>&nbsp;
					<a href='contactus.php' style='color:LightSalmon;font-size:14pt'>Contact Us</a>&nbsp;
					<a href='aboutus.php' style='color:LightSalmon;font-size:14pt'>About Us</a>&nbsp;
					<a href='feedback.php' style='color:LightSalmon;font-size:14pt'>Feedback</a>&nbsp;
					<a href='feedback.php' style='color:LightSalmon;font-size:14pt'>Faq</a>&nbsp;
					<a href='privacy.php' style='color:LightSalmon;font-size:14pt'>Privacy Policy</a>&nbsp;
					<br/>
					<a href='httpP://google.com'><img src='Images/google.png' height='30' width='30'></a>&nbsp;
					<a href=''><img src='Images/W7gYg.jpg' height='30' width='30'></a>&nbsp;
					<a href=''><img src='Images/twit.png' height='30' width='30'></a>&nbsp;
					<a href=''><img src='Images/youtube.png' height='30' width='30'></a>&nbsp;

				</div>
			</div>
		</body>
</html>

<script>
	var lefts=$("#container").height();
	var rights=$("#right").height();
	
	if(lefts>rights)
		$("#right").height(lefts);
	else
		$("#container").height(rights);
	
</script>