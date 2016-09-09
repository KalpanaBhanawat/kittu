<?php
	include('head.php');
	include('db.php');
	
	$city_name=$_REQUEST["a"];
	$res_name=$_REQUEST["b"];
	
	$r=mysql_query("select * from menu where city_name='$city_name' and res_name='$res_name'");
	
	
	echo "<br/><center>$city_name=>$res_name<br>";
	if($rows=mysql_Fetch_array($r))
	{
		echo "<image src='admin/menu_photo/$rows[3]' height=400  width=400>";
	}
	

	include('footer.php');

?>