<?php
	// coding for functions
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
		$("#btn").click(function()
		{
			$("#ap").append("<br/><input type='text' name='fun[]'><br/>");
		
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
<br/>
<form id='form1'action='add_functions.php' method='post' enctype='multipart/form-data'>
<fieldset  style='width:550px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
<table border='0' align='center' cellspacing='0' cellpadding='0'>
	<tr>
		<td colspan='2' align='center' style='color:red;font-weight:bold'>ADD FUNCTIONS</td>
	</tr>
	<tr>
		<td colspan='2'>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td colspan='2' style='color:Red;font-weight:bold;' align='center'>
				<?php
				
					if(isset($_SESSION["err"]))
					echo  $_SESSION["err"];
				
				?>
		</td>
	</tr>
	<tr>
		<td colspan='2'>
			&nbsp;
		</td>
	</tr>
	<tr>
		<td style='font-weight:bold'>City Name :</td>
		<td><select id='city_name'  name='city_name' style='height:30px;width:100px;'
					class='validate[required] radio' id='sel'>
					<?php
						include('db.php');
						$r=mysql_query("select distinct city_name from city");
							echo "<option  value=''>--Select</option>";
						while($row=mysql_fetch_array($r))
						{
							if($city_name==$row[0])
							echo"<option value='$row[0]' selected>$row[0]</option>";
							else
							echo"<option value='$row[0]'>$row[0]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		
		<tr>
			<td style='font-weight:bold'>Restaurant Name :</td>
			<td id='cafe_name'>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		
		<tr>
			<td style='font-weight:bold'>Price :</td>
			<td><input type='text' name='price' value='' placeholder='Price' Class='validate[required]' 
						id='prc'></td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		<tr>
			<td style='font-weight:bold'>Photo :</td>
			<td><input type='file' name='ph' Class='validate[required]' id='photo'><td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		<tr>
			<td style='font-weight:bold'>Discount :</td>
			<td><input type='text' name='dis' value='' placeholder='Discount'Class='validate[required]' 
						id='dcnt'></td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		<tr>
			<td style='font-weight:bold'>Other Facility :</td>
			<td><input type='text' name='fac' value='' placeholder='Other Facility' Class='validate[required]' 
						id='otrfac'></td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		<tr>
			<td  valign='top' style='font-weight:bold'>Function Name :</td>
			<td>
				<input type='text' value='' name='fun[]' placeholder='Function' Class='validate[required]' 
								id='funm'>
				<input type='button' value='+' id='btn'>
				<br/>
					<span id='ap'>
					</span>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		<tr>
			<td colspan='2' align='center'>
			<input type='submit' value='SEND' name='sub' style='height:30px;width:100px;font-weight:bold'>
			</td>
		</tr>
		</table>
</form>
<?php
			$_SESSION["err"]="";
			include('footer.php');
?>