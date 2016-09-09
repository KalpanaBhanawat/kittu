<?php
	//address and description add in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$cafe_name=mysql_real_escape_string($_POST["cafe_name"]);
	$cafe_address=mysql_real_escape_string($_POST["cafe_add"]);
	$cafe_description=mysql_real_escape_string($_POST["cafe_des"]);
	$contact=mysql_real_escape_string($_POST["contact"]);
	$email=mysql_real_escape_string($_POST["email"]);
	$website=mysql_real_escape_string($_POST["website"]);
	$open=mysql_real_escape_string($_POST["open"]);
	$close=mysql_real_escape_string($_POST["close"]);
	
	$r=mysql_query("insert into city_name_add_des(city_name,res_name,res_address,res_description,contact,email_id,
					website,opening_time,closing time)
	values('$city_name','$cafe_name','$cafe_address','$cafe_description','$contact','$email','$website',
			'$open','$close')");
	if($r)
	{
		header("location:des_city_res_name.php");
	}
	else
		echo mysql_error();
?>