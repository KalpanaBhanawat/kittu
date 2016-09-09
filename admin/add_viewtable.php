<?php
include('head.php');
	//search tables in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$res_name=mysql_real_escape_string($_POST["cafe_name"]);
	
	$r=mysql_query("select * from booking_table where city_name='$city_name' and res_name='$res_name' and status='1'");
		echo"<br/><table align='center' border='1' width='70%' cellspacing='0' cellpadding='2'>";
		
		
	while($row=mysql_fetch_array($r))
	{
		
			echo"<tr><td colspan='7' align='center' style='color:red;font-size:15pt;font-weight:bold;border:none'>USER INFORMATION</td></tr>";
		
			
			echo"<tr><td>User Name :</td><td>Contact Number :</td><td>Address :</td><td>Email Id :</td>
				<td>Table Number :</td><td>Date :</td><td>Time :</td></tr>";
			echo"<tr><td>",$row[3],"</td>";
			echo"<td>",$row[4],"</td>";
			echo"<td>",$row[5],"</td>";
			echo"<td>",$row[6],"</td>";
			echo"<td>",$row[7],"</td>";
			echo"<td>",$row[8],"</td>";
			echo"<td>",$row[9],"</td></tr>";
	}
		
?>