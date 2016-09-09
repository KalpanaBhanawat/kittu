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
<html>
	<!-- coding for admin form -->
	<head>
		<title>Restaurant</title>
		<link rel='stylesheet' href='css/style.css'/>
	</head>
		<body>
			<div id='main'>
				<div id='header'>
					<img src='Images/Logo.jpg' height='100' width='160' style='float:left'>
					<br/>ONLINE BOOKING FOR RESTAURANT
				</div>
				<div>
					<table align='center' width='100%' border='0' cellspacing='0'>
						<tr>
							<td><img src='Images/a.jpg' height='200' width='390'></td>
							<td><img src='Images/burger.jpg' height='200' width='400'></td>
							<td><img src='Images/c.jpg' height='200' width='390'></td>
						</tr>
					</table>
				</div>
				
				<div id='container'>
				<br/>
					<form id='form1' action='index_data.php' method='post'>
					<fieldset  style='width:550px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
					<table border='0' align='center' cellspacing='0' cellpadding='0'>
						<tr>
							<td colspan='2' align='center' style='color:red;font-size:15pt;font-weight:bold'>
							ADMIN FORM</td>
						</tr>
						<tr>
							<td colspan='2'>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td style='font-weight:bold'>Name And Email Address :&nbsp;</td>
							<td><input type='text' value='' name='nm' placeholder='Name And Email Address'
									Class='validate[required]' id='nm'></td>
						</tr>
						<tr>
							<td colspan='2'>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td style='font-weight:bold'>Password :</td>
							<td><input type='password' value='' name='pass' placeholder='Password'
										Class='validate[required]' id='pswrd'></td>
						</tr>
						<tr>
							<td colspan='2'>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td colspan='2' align='center'>
							<input type='submit' name='sub' value='SEND' style='height:30px;width:100px;
							font-weight:bold'>
							</td>
						</tr>
					</table>
					</form>
					</div>
					
					<div id='right'>
					<table align='center' cellspacing='0'>
						
						
					</table>
				</div>	
					
				<div id='Footer'>
					Design And Developed By Kalpana Bhanawat<br/>
					&copy; CopyRight 2016-2017
					<br/>
					<a href='home.php'>Home</a>&nbsp; &nbsp;
					<a href='aboutcafe.php'>About Cafe</a>&nbsp; &nbsp;
					<a href='contact.php'>Contact Us</a>
					<br/>
					<img src='Images/google.png' height='30' width='30'>&nbsp; &nbsp;
					<img src='Images/W7gYg.jpg' height='30' width='30'>&nbsp; &nbsp;
					<img src='Images/twit.png' height='30' width='30'>&nbsp; &nbsp;
					<img src='Images/youtube.png' height='30' width='30'>
				</div>
			</div>
		</body>
</html>