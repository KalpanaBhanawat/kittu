<?php
session_start();
	//dishes and description add in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$res_name=mysql_real_escape_string($_POST["cafe_name"]);
	
	$res_description=mysql_real_escape_string($_POST["res_des"]);
	$r=mysql_query("insert into dishes_des(city_name,res_name,res_description)
	values('$city_name','$res_name','$res_description')");
	if($r)
	{
			$id=mysql_insert_id();
			$pname=$id.".jpg";
			$photo=move_uploaded_file($_FILES["ph"]["tmp_name"],"dishes/".$pname);
			
			$r=mysql_query("update dishes_des set res_dishes='$pname' where id='$id'");
			$_SESSION["err"]="Dishes Added Successfully";
			header("location:dishes_des.php");
		
		
	}
	else
		echo mysql_error();
?>