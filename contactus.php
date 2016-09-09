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

<link href="css2/template.css" rel="stylesheet" type="text/css" />
<link href="css2/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
<script src="js2/jquery-1.6.min.js" type="text/javascript"></script>
<script src="js2/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js2/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
	$.noConflict()
    jQuery(document).ready(function() {
    jQuery("#form1").validationEngine();
    });

    </script>
	<form  id='form1' action='contactus1.php' method='post' enctype='multipart/form-data'>
	<table width='70%' border='0' align='center'>
	<tr>
		<td colspan='2'><span style='color:BurlyWood;font-style:italic;font-size:25pt'>Contact Us</span></td>
	</tr>
		<tr>
			<td>
				<p style='font-size:13pt'>
						Please enter your contact details and a short message below and we will 
						try to answer your query as soon as possible.
				</p>
			</td>
		</tr>
	<tr>
		<td height='30px'><b>Name :</b></td>
	</tr>
	
	<tr>
		<td>
		<Input type='text' name='nm' Class="validate[required]" id='nme' style='height:40px'value='' size='50px'>
		</td>
	</tr>
		<td height='30px'><b>Email Id :</b></td>
	</tr>
	<tr>
		<td>
			<Input type='text' name='email' id='em' style='text-transform:lowercase'
					Class="validate[required,custom[email]" value='' size='50px'>
		</td>
	</tr>
		<td height='30px'><b>Message :</b></td>
	</tr>
	<tr>
		<td>
			<textarea name='mae' id='msg' Class="validate[required]" style='height:70px;width:348px'></textarea>
		</td>
	</tr><br/><br/>
	<tr>
		<td colspan='2'><Input type='submit' name='sb' style='height:30px;width:90px;align:center;
				font-weight:bold;font-size:12pt' value='SUBMIT' ></td>
	</tr>
	</table>
	</form>
	
	<br/><br/>
	<table border='0' align='center' width='70%'>
	<tr>
		<td><h2 style='color:BurlyWood;font-style:italic'>Get in touch with us</h2></td>
	</tr>
	<tr>
		<td><pre style='font-family:calibri'>We will be very happy to help you and assist you in your search.
			Feel free to call us , mail us or simply complete the contact form.</pre>
		</td>
	</tr>
	<tr>
		<td><img src='Images/mob.png' width='40px' height='60px'></td>
	</tr>
	<tr>
			<td><h3>8598762001</h3></td>
	</tr>
	<tr>
		<td><img src='Images/msg1.png' width='40px' height='40px'></td>
	</tr>
	<tr>
		<td><h3>contact@restaurant.com</h3></td>
	</tr>
	<tr>
		<td>Email Id :
		<h3>onlinerestaurant@gmail.com</h3></td>
	</tr>
	</table>
	
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