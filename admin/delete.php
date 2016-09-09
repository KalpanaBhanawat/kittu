<?php
	//coding for delete
	include('db.php');
	$id=$_GET["a"];
	$r=mysql_query("delete from city_name_add_des where id='$id'");
	if($r)
		header("location:viewdata.php");

?>