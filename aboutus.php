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
	
	
	
	<p style='color:BurlyWood;font-style:italic;font-size:22pt;text-align:left'>&nbsp;&nbsp;About This Website...</p>
	
	<p style='font-size:13pt'>
	I'm a paragraph. Click here to add your own text and edit me. It's easy. Just click "Edit Text" 
	or double click me to add your own content and make changes to the font.
	Feel free to drag and drop me anywhere you like on your page.
	I'm a great place for you to tell a story and let your users know a little more about you.
		<br/>This is a great space to write long text about your company and your services. 
	You can use this space to go into a little more detail about your company. 
	<br/>Talk about your team and what services you provide. 
		Tell your visitors the story of how you came up with the idea for your business and what makes you 
	different from your competitors. Make your company stand out and show your visitors who you are.


	At Wix we're passionate about making templates that allow you to build fabulous websites and 
	it's all thanks to the support and feedback from users like you!Keep up to date with New Releases and 
	what's Coming Soon in Wixellaneous in Support. 

	

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
					<a href='faq.php' style='color:LightSalmon;font-size:14pt'>Faq</a>&nbsp;
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