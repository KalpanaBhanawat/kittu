<?php
include('head.php');
?>
<script src='jquery-1.12.3.min.js'></script>

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
<body>

	<!--    add feedback  -->
	<br/>
	<br/>
	<fieldset  style='width:500px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<form id='form1'action='add_feedback.php' method='post'>
	<table border='0' align='center' cellspacing='0' cellpadding='0' width='80%'>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td colspan='2' align='center' style='font-size:14pt;color:red;font-weight:bold'>
						FEEDBACK OF THIS WEBSITE</td>
		</tr>
	
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		
		<tr>
			<td style='font-weight:bold'>Name :</td>
			<td><input type='text' name='nm' Class='validate[required]' id='name' placeholder='Name'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Email Id :</td>
			<td><input type='text' name='email' Class='validate[required,custom[email]' id='emid' placeholder='Email Id'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td valign='top' style='font-weight:bold'>Feedback :</td>
			<td><textarea rows='3' cols='30' name='feedback' placeholder='Feedback' Class='validate[required]'
				  id='fdbk'></textarea></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<input type='submit' value='SEND' name='sub' style='height:30px;width:100px;font-weight:bold'>
			</td>
		</tr>
	</table>
	</form>
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