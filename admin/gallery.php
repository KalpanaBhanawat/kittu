<?php
session_start();
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

	<!--    add gallery  -->
	<br/>
	<br/>
	<fieldset  style='width:500px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<form id='form1'action='add_gallery.php' method='post' enctype='multipart/form-data'>
	<table border='0' align='center' cellspacing='0' cellpadding='0' width='80%' >
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
			<td colspan='2'  align='center' style='color:Red;font-weight:bold;'>
				ADD GALLERY
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
			<td style='font-weight:bold'>Restaurant Photos :</td>
			<td><input type='file' name='ph' Class='validate[required]' id='photo'></td>
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
			$_SESSION["err"]="";
			include('footer.php');
?>