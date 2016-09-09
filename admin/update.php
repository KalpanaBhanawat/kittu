<?php
	//update in update
	include('db.php');
	$id=mysql_real_escape_string($_POST["id"]);
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$cafe_name=mysql_real_escape_string($_POST["cafe_name"]);
	$cafe_address=mysql_real_escape_string($_POST["add"]);
	$cafe_description=mysql_real_escape_string($_POST["des"]);
	$r=mysql_query("update city_name_add_des set city_name='$city_name',cafe_name='$cafe_name',
		cafe_address='$cafe_address',cafe_description='$cafe_description' where id='$id'");
	if($r)
		header("location:viewdata.php");
?>