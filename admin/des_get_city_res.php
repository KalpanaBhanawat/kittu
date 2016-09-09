<?php
	//city select than cafe name select use in database
	include('db.php');
	$get_city_name=$_POST["get_city_name"];
	$r=mysql_query("select res_name from cafename where city_name='$get_city_name'");
	echo"<select name='cafe_name' style='height:30px;width:100px;'>";
	echo "<option  value=''>--Select</option>";
	while($row=mysql_fetch_array($r))
	{
		echo"<option value='$row[0]'>$row[0]</option>";
	}
	echo"</select>";
?>