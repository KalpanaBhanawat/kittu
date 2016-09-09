<?php
include('head.php');
?>
<script src='jquery-1.12.3.min.js'></script>
<script>
	$(document).ready(function()
	{
		$("#city_name").change(function()
		{
			var citys=this.value;
			$.post("des_get_city_res.php",{get_city_name:citys},function(data)
			{
				$("#cafe_name").html(data).show();
			});
		});
	
	});
</script>
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

	<!--    city select than res name select   -->
	<br/>
	<fieldset  style='width:500px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<form id='form1' action='add_des.php' method='post'>
	<table border='0' align='center' cellspacing='0' cellpadding='0' width='80%' >
		<tr>
			<td colspan='2'  align='center' style='color:Red;font-weight:bold;'>
				SELECT CITY NAME AND RESTAURANT NAME 
			</td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>City Name :</td>
			<td>
				<select id='city_name'  name='city_name' style='height:30px;width:100px;'
				class='validate[required] radio' id='sel'>
					<?php
						include('db.php');
						$r=mysql_query("select distinct city_name from cafename");
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
		</tr>
		<tr>
			<td style='font-weight:bold'>Restaurant Name :</td>
			<td id='cafe_name'>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Restaurant Address :</td>
			<td><textarea name='cafe_add' rows='4' cols='20' placeholder='Address' Class='validate[required]'
				  id='ad'></textarea></td>
		<tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Restaurant Description :</td>
			<td><textarea name='cafe_des' rows='4' cols='20' placeholder='Description' Class='validate[required]'
				  id='des'></textarea></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Contact Number :</td>
			<td><input type='text' name='contact' value='' placeholder='Contact Number' Class='validate[required]'
				  id='con'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Email Id :</td>
			<td><input type='text' name='email' placeholder='Email' value='' Class='validate[required]'
				  id='emid'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>Website :</td>
			<td><input type='text' name='website' placeholder='Website' value='' Class='validate[required]'
				  id='webst'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		
		<tr>
			<td style='font-weight:bold'>Opening Time :</td>
			<td><input type='text' name='open' value='' placeholder='Opening Time' Class='validate[required]'
				  id='optm'></td>
		</tr>
		<tr>
			<td colspan='2'>&nbsp;</td>
		</tr>
		
		<tr>
			<td style='font-weight:bold'>Closing Time</td>
			<td><input type='text' name='close' value='' placeholder='Closing Time' Class='validate[required]'
				  id='cltm'></td>
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
<?php
		
			include('footer.php');
?>