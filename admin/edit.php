<script src='jquery-1.12.3.min.js'></script>
<script>
	$(document).ready(function()
	{
		$("#city_name").change(function()
		{
			var citys=this.value;
			$.post("",{get_city_name:citys},function(data)
			{
				$("#cafe_name").html(data).show();
			});
		});
	
	});
</script>
<?php
	//update for data
include('head.php');
	include('db.php');
	$id=$_GET["b"];
	$r=mysql_query("select * from city_name_add_des where id='$id'");
	if($row=mysql_fetch_array($r))
	{
		$id=$row[0];
		$city_name=$row[1];
		
		
		$cafe_name=$row[2];
		$cafe_address=$row[3];
		$cafe_description=$row[4];
	}
?>
	
	<br/>
	<fieldset  style='width:600px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<form action='update.php' method='post'>

	<table border='0' align='center' width='60%' cellspacing='0'>
		<tr>
			<td colspan='2' align='center'>
			<input type='hidden' value='<?php echo $id; ?>' name='id'>
			</td>
		</tr>
		<tr>
			<td style='font-weight:bold'>City Name :</td>
			<td><select id='city_name'  name='city_name' style='height:30px;width:100px;'>
					<?php
						include('db.php');
						$r=mysql_query("select distinct city_name from city_name_add_des");
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
				<?php
			
				include('db.php');
				
			
				echo"<select name='cafe_name' style='height:30px;width:100px;'>";
				
					echo"<option value='$cafe_name'>$cafe_name</option>";
			
				echo"</select>";
				?>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR> 
		<tr>
			<td  style='font-weight:bold'>Restaurant Address :</td>
			<td><textarea name='add' rows='3' cols='20'><?php echo $cafe_address;?></textarea></td>  
			</tR>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		
		<tr>
			<td style='font-weight:bold'>Restaurant Description :</td>
			<td><textarea name='des' rows='4' cols='20'><?php echo $cafe_description;?></textarea></td>  
		</tR>
		<tr>
			<td colspan='2'>
				&nbsp;
			</td>
		</tR>
		
		<tR>
			<td colspan='2'  align='center'>
				<input type='submit'  value='ADD' style='height:30px;width:100px;font-weight:bold'>
			
			</td>
		</tR>
				
	</table>
	</form>
	</fieldset>
		
<?php		
		include('footer.php');
?>