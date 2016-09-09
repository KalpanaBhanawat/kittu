<?php
	//add city name
	include('head.php');
?>


<br/>
<br/>
					<table border='1' align='center' cellspacing='0' cellpadding='1'>
						<tr>
							<td style='font-weight:bold'>City Name :</td>
							<td>
								<select id='city'>
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
					</table>
		<?php
		
			include('footer.php');
		?>