<script>
	function con()
	{
		bol=confirm("Are you sure to Delete this record");
		if(bol==true)
		{
			return true;
		}rt
		return false;
	}
</script>	
<?php
include('head.php');
	//coding for view
	include('db.php');
	$r=mysql_query("select * from city_name_add_des");
	?>
	<br/>
	<fieldset  style='width:auto;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<?php
	echo"<br/><table border='1' align='center' cellsapcing='0' cellpaddind='0'>";
		echo"<tr><td colspan='11' style='color:red;text-align:center;font-weight:bold;font-size:20pt;border:none'>
		View Data</td></tr>
		<tr><td style='font-size:12pt;font-weight:bold'>ID</td>
		<td style='font-size:12pt;font-weight:bold'>City Name</td>
		<td style='font-size:12pt;font-weight:bold'>Restaurant Name</td>
		<td style='font-size:12pt;font-weight:bold'>Restaurant Address</td>
		<td style='font-size:12pt;font-weight:bold'>Restaurant Description</td>
		<td style='font-size:12pt;font-weight:bold'>Contact Number</td>
		<td style='font-size:12pt;font-weight:bold'>Email Id</td>
		<td style='font-size:12pt;font-weight:bold'>Website</td>
		<td style='font-size:12pt;font-weight:bold'>Opening Time</td>
		<td style='font-size:12pt;font-weight:bold'>Closing Time</td>
		<td style='font-size:12pt;font-weight:bold'>Delete</td>
		<td style='font-size:12pt;font-weight:bold'>Update</td></tr>";
		while($row=mysql_fetch_array($r))
		{
			echo"<tr><td>",$row[0],"</td>";
			echo"<td>",$row[1],"</td>";
			echo"<td>",$row[2],"</td>";
			echo"<td>",$row[3],"</td>";
			echo"<td>",$row[4],"</td>";
			echo"<td>",$row[5],"</td>";
			echo"<td>",$row[6],"</td>";
			echo"<td>",$row[7],"</td>";
			echo"<td>",$row[8],"</td>";
			echo"<td>",$row[9],"</td>
			<td><a href='delete.php?a=$row[0]' onclick='return con()' style='color:blue'>Delete</a></td>
			<td><a href='edit.php?b=$row[0]' style='color:blue'>Update</a></td></tr>";
		}
		echo"</table>";
include('footer.php');
?>