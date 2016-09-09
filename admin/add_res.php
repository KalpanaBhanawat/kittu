<?php
	//add res name and city name and Photo
session_start();
	include('head.php');
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
<form id='form1' action='res_name.php' method='post' enctype='multipart/form-data'>
	<br/><br/>
	<fieldset  style='width:500px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>

<table border='0' align='center' cellspacing='0' cellpadding='0'  width='80%' >
	<tr>
		<td colspan='2' style='color:Red;font-weight:bold;' align='center'>
				<?php
				
					if(isset($_SESSION["err"]))
					echo  $_SESSION["err"];
				
				?>
		</td>
	</tr>
	<tr>
		<td colspan='2'>&nbsp;</td>
	</tr>
	<tr>
		<td colspan='2'  align='center' style='color:red;font-weight:bold'>
		ADD RESTAURANT NAME
		</td>
	</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
	
	<tr>
		<td style='font-weight:bold'>City Name :</td>
		<td>
			<select id='city' name='city' style='height:30px;width:240px;' 
			class='validate[required] radio' id='sel'>
				<?php
				include('db.php');
					$r=mysql_query("select distinct city_name from city");
					echo "<option  value=''>--Select</option>";
					while($row=mysql_fetch_array($r))
					{
						
						echo"<option value='$row[0]'>$row[0]</option>";
					}
				?>
			</select>
			</td>
		</tr>
		
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tR>
		<tr>
			<td style='font-weight:bold'>Restaurant Name :</td>
			<td width='10'><input type='text' value='' name='cfnm' size=35 placeholder='Restorent Name' Class='validate[required]'
				  id='resnm' style='height:30px'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Restaurant Image :</td>
			<td><input type='file' name='ph' Class='validate[required]'
				  id='im'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
			<input type='submit' value='SEND' name='sub'  align='center' style='height:30px;width:100px;font-weight:bold'>
			</td>
		</tr>
</table>
</form>
<?php
		$_SESSION["err"]="";
	include('footer.php');
?>