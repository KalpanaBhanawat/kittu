<?php
	//table book
	session_start();
	include('db.php');
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
	$city_name=$_GET["a"];
	$res_name=$_GET["b"];
	
	$rr=mysql_query("select * from table_book where city_name='$city_name'  and res_name='$res_name'");
	$rows=mysql_fetch_row($rr);
	
	$table_no=$rows[3];
	
	
	$r=mysql_query("select * from cafename where city_name='$city_name' and res_name='$res_name'");
	echo"<form id='form1' action='booking_table_add.php' method='post'>";
	?>
	<br/>
	<fieldset  style='width:600px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<?php
	while($row=mysql_Fetch_row($r))
		{
		echo"<br/><table align='center' border='0' width='70%'>";
		
		if(isset($_SESSION["err"]))
		{
			echo "<tr><td  align='center' style='color:red;font-weight:bold;text-transform:capitalize;
			font-size:15pt' colspan='2'>";
			echo $_SESSION["err"];
		}
		echo"<tr><td colspan='2' align='center' style='font-weight:bold;color:red;font-size:17pt'>
					Booking For Table Number</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo "<tr><td align='center' style='font-weight:bold'>City Name :</td>
				  <td>",$row[1],"
				  <br/><input type='hidden' name='a'  value='$city_name' Class='validate[required]'
				  id='ctnm'></td></tr>";
		echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	
		echo "<tr><td align='center' style='font-weight:bold'>Restaurant Name :</td>
				  <td>",$row[2],"<br/><input type='hidden' value='$res_name'  name='b' Class='validate[required]'
				  id='resnm'></td></tr>";
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
		<td><input type='text' name='cn' value=''  placeholder='Conatct No.' Class='validate[required]'
				  id='con'></td></tr>";
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	
	echo"<tr><td align='center' style='font-weight:bold'>Address</td>
		<td><textarea rows='4' cols='20' name='add' placeholder='Address' Class='validate[required]'
				  id='ad'></textarea></td></tr>";
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
	
	echo"<tr><td align='center' style='font-weight:bold'>Email Id :</td>
		<td><input type='text' name='email' value='' placeholder='User Email Id' Class='validate[required]'
				  id='eml'></td></tr>";
	echo"<tr><td colspan='2'>
				&nbsp;
				</td></tr>";
				
	echo"<tr><td align='center' style='font-weight:bold'>Table Number :</td>
		<td><select name='table_no' class='validate[required] radio' id='sel'>";
		echo "<option  value=''>--Select</option>";
		for($i=1;$i<=$table_no;$i++)
		echo "<option value='$i'>$i</option>";
	
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
	include("footer.php");
?>