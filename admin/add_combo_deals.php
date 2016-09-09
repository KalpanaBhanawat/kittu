<?php
	//address and description add in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$res_name=mysql_real_escape_string($_POST["cafe_name"]);
	$title=mysql_real_escape_string($_POST["title"]);
	$offer=mysql_real_escape_string($_POST["offer"]);
	
	
	$r=mysql_query("insert into combo_deals(city_name,res_name,combo_title,offers)
	values('$city_name','$res_name','$title','$offer')");
	if($r)
	{
		header("location:combo_deals.php");
	}
	else
		echo mysql_error();
?>