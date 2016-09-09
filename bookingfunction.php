<?php
session_start();
	include("head.php");
?>
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
<?php
	include('db.php');

	$city_name=$_GET["a"];
	$res_name=$_GET["b"];
	
	$rr=mysql_query("select * from functions where city_name='$city_name'  and res_name='$res_name'");
	$rows=mysql_fetch_row($rr);
	
	$fun_name=$rows[3];
	$arr=explode(",",$fun_name);
	$c=count($arr);
	
	$r=mysql_query("select * from cafename where city_name='$city_name' and res_name='$res_name'");
	?>
	<br/>
	<fieldset  style='width:600px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	
	<?php
	echo"<form id='form1' action='booking_function_add.php' method='post'>";
	while($row=mysql_Fetch_row($r))
		{
		echo"<table align='center' border='0' width='70%'>";
		
		if(isset($_SESSION["err"]))
		{
			echo "<tr><td  align='center' style='color:red;font-weight:bold;text-transform:capitalize;
			font-size:15pt' colspan='2'>";
			echo $_SESSION["err"];
		}
		echo"<tr><td colspan='2' align='center' style='font-weight:bold;color:red;font-size:17pt'>
					Booking For Function</td></tr>";
		echo "<tr><td align='center' style='font-weight:bold'><br/>City Name :</td>
				  <td><br/>",$row[1],"
				  <input type='hidden' name='a'  value='$city_name' Class='validate[required]'
				  id='ctnm'></td></tr>";
		echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	
		echo "<tr><td align='center' style='font-weight:bold'>Restaurant Name :</td>
				  <td>",$row[2],"<br/><input type='hidden' value='$res_name'  name='b' Class='validate[required]'
				  id='hi'></td></tr>";
	    echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	}
	echo"<tr><td align='center' style='font-weight:bold'>User Name :</td>
		<td><input type='text' name='nm' value='' placeholder='User Name' Class='validate[required]'
		id='unm'></td></tr>";
		
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";

	echo"<tr><td align='center' style='font-weight:bold'>Contact No. :</td>
		<td><input type='text' name='cn' value=''  placeholder='Conatct Number'
		 Class='validate[required]'
				  id='con'></td></tr>";
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	
	echo"<tr><td align='center' style='font-weight:bold'>Address :</td>
		<td><textarea rows='4' cols='20' name='add' placeholder='Address'  Class='validate[required]'
				  id='ad'></textarea></td></tr>";
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	
	echo"<tr><td align='center' style='font-weight:bold'>Email Id :</td>
		<td><input type='text' name='email' value='' placeholder='User Email Id'
		Class='validate[required,custom[email]' id='email'></td></tr>";
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
				
	echo"<tr><td align='center' style='font-weight:bold'>Function Name :</td>
		<td><select name='function' class='validate[required] radio' id='sel'>";
		
		echo "<option  value=''>--Select</option>";
		for($i=0;$i<$c;$i++)
		echo "<option value='$arr[$i]'>$arr[$i]</option>";
		echo "</select></td></tr>";
		
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	echo"<tr><td align='center' style='font-weight:bold'>Date :</td>
		<td><input type='text' name='date' value='' placeholder='Date' Class='validate[required]'
				  id='dt'></td></tr>";
	
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
				
	echo"<tr><td align='center' style='font-weight:bold'>Time :</td>
		<td><input type='text' name='time' value='' placeholder='Time' Class='validate[required]'
				  id='tm'></td></tr>";
		
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
				
				
	echo"<tr><td align='center' colspan='2'><input type='submit' name='sub' value='SUBMIT'
				style='font-weight:bold;height:30px;width:100px'></td></tr>";
	echo"</table>";
	$_SESSION["err"]="";
	?>
</div>
		<div id='right'>
					<table align='center' cellspacing='0'>
						<?php
							$r=mysql_query("select * from city_name_add_des where city_name='$city_name' and 
										res_name='$res_name'");
							if($row=mysql_fetch_array($r))
							{
								echo"<tr><td colspan='2'>&nbsp;<img src='Images/open1.jpg' height='100' 
								width='100'></td></tr>";
								echo"<br/><tr><td><br/>&nbsp;Opening And Closing Time :</td></tr><tr>
											<td align='center'><br/>",$row[8],"-",$row[9],"</td></tr>";
								
							}
							?>
						
							<tr>
								<td><br/><img src='Images/coffee.jpg' height='300' width='250'></td>
							</tr>
							<tr>
								<td><img src='Images/images2.jpg' height='300' width='250'></td>
							</tr>
								
					</table>
				</div>		
				<div id='Footer'>
			
					 <span style='font-size:15pt'>&copy; CopyRight Of Online Restaurant 2016-2017</span></br/>
					<a href='home.php' style='color:LightSalmon;font-size:14pt'>Home</a>&nbsp;
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
<script src='jquery-1.8.0.min.js'></script>
<script>
	var left=$("#container").height();
	var right=$("#right").height();
	if(left>right)
		$("#right").height(left);
	else
		$("#container").height(right);
	
</script>