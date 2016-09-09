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
					
					<table  border='0' width='100%' align='center' cellspacing='0' cellpadding='10'>
					<tr>
						<td align='center'><a href='home.php' style='font-style:italic'>HOME </a></td>
						<td align='center'><a href='contactus.php' style='font-style:italic'> CONTACT US </a></td>
						<td align='center'><a href='aboutus.php' style='font-style:italic'>ABOUT US</a></td>
						<td align='center'><a href='feedback.php' style='font-style:italic'>FEEDBACK</a></td>
						<td align='center'><a href='faq.php' style='font-style:italic'>FAQ</a></td>
						<td align='center'><a href='privacy.php' style='font-style:italic'>PRIVACY POLICY</a></td>
						
					</tr>
					</table>
					
				</div>
				<div id='container'>
					<p style='color:BurlyWood;font-style:italic;font-size:25pt;text-align:left'>&nbsp;&nbsp;
						Privacy Policy...
					</p>
					<p style='font-size:12pt'>
						Onlinebooking.com takes your privacy seriously. This privacy policy describes what
						personal information we collect and how we use it. See this privacy policy primer to
						learn more about privacy policies in general.
					</p>
					<p style='text-align:left;font-weight:bold;font-size:12pt'> &nbsp; &nbsp;
							Routine Information Collection
					</p>
					<p style='font-size:12pt'>
						All web servers track basic information includes,but is not limited to, IP addresses, 
						browser details, timestamps and referring pages. None of this information can personally 
						identify specific visitors to this site. The information is tracked for routine
						administration and maintenance purposes.
					</p>
					<p style='text-align:left;font-weight:bold;font-size:12pt'> &nbsp; &nbsp;
						Cookies and Web Beacons
					</p>
					<p style='font-size:12pt'>
						Where necessary, uses cookies to store information about a visitor's preferences and
						history in order to better serve the visitor and/or present the visitor with customized
						content.
						Advertising partners and other third parties may also use cookies, Scripts and/or wed 
						beacons to track visitors to our site in order to display advertisement and other useful 
						information. Such tracking is done directly by the third parties through their own servers
						and is subject to their own privacy policies.
					</p>
					<p style='text-align:left;font-weight:bold;font-size:12pt'> &nbsp; &nbsp;
						controlling your Privacy
					</p>
					<p style='font-size:12pt'>
						Note that you can change your browser settings to disable cookies if you have privacy 
						concerns. Disabling cookies for all sites is not recommended as it may interface with 
						your use of some sites. The best option is to disable or enable cookies on a per-site 
						basis. Consult your browser documentation for instructions on how to block cookies and 
						other tracking mechanisms. This list of web browser privacy management links may also be 
						useful.
					</p>
					<p style='text-align:left;font-weight:bold;font-size:12pt'> &nbsp; &nbsp;
						Special Note About Google Advertising
					</p>
					<p style='font-size:12pt'>
						Any advertisement served by Google, Inc., And affiliated companies may be controlled
						using cookies. These cookies allow Google to display ads based on your visits to this 
						site and other sites that use this sites that use Google advertisement services. Learn
						how to opt out of Google's cookie usage. As mentioned above, any tracking done by Google 
						through cookies and other mechanisms is subject to Google's own privacy policies.
					</p>
					<p style='text-align:left;font-weight:bold;font-size:12pt'> &nbsp; &nbsp;
						Contact Information
					</p>
					<p style='font-size:12pt'>
						Concerns or questions about this privacy policy can be directed to admin@onlinebooking.com
						clarification.
					</p>
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