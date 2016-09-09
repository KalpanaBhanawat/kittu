<?php
	include('head.php');
	include('db.php');
	
	$city_name=$_REQUEST["a"];
	$res_name=$_REQUEST["b"];
	
	$r=mysql_query("select * from city_name_add_des where city_name='$city_name' and res_name='$res_name'");
	
	
	
	echo "<br/><table align='center'>";
		echo "<tr><td align='center' colspan='2' style='font-size:20pt;font-weight:bold;font-style:italic'>$city_name</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
	if($rows=mysql_Fetch_array($r))
	{
		
		echo"<tr><td style='font-weight:bold'>Address :</td><td>",$rows[3],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td style='font-weight:bold'>Contact Number :</td><td>",$rows[5],"</td></tr>";
			echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td style='font-weight:bold'>Email Id :</td><td>",$rows[6],"</td></tr>";
			echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td style='font-weight:bold'>Website :</td><td>",$rows[7],"</td></tr>";
	}
	
	echo"</table>";
	include('footer.php');

?>