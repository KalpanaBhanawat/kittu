<?php
	//confirm table book
	include('head.php');
	$id=$_REQUEST["a"];
	include('db.php');
	$r=mysql_query("select * from booking_table where id='$id'");
	?>
	<br/>
	<fieldset  style='width:600px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<?php
	while($row=mysql_fetch_array($r))
	{
		echo"<br/><table align='center' cellspacing='0' cellpadding='3'>";
		
		echo"<tr><td colspan='2' align='center' style='font-weight:bold;color:red;font-size:14pt'>
					CONFIRM THESE INFORMATION</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>City Name :</td><td>",$row[1],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
	
		echo"<tr><td>Restaurant Name :</td><td>",$row[2],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>User Name :</td><td>",$row[3],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>Contact :</td><td>",$row[4],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>Address :</td><td>",$row[5],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>Email Id :</td><td>",$row[6],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>Table Number :</td><td>",$row[7],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>Date :</td><td>",$row[8],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td>Time :</td><td>",$row[9],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		
		echo"<tr><td align='center'><a href='confirm_table_add.php?a=$id'>
			<input type='submit' value='CONFIRM' name='confirm' 
				style='font-size:12pt'></a>&nbsp;</td></tr>";
		echo"</table>";
	}
?>

<?php
	include('footer.php');

?>