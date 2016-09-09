<?php
session_start();
	//menu add in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$cafe_name=mysql_real_escape_string($_POST["cafe_name"]);
	
	$r=mysql_query("insert into menu(city_name,res_name)
	values('$city_name','$cafe_name')");
	if($r)
	{
		$id=mysql_insert_id();
			$pname=$id.".jpg";
			$photo=move_uploaded_file($_FILES["ph"]["tmp_name"],"menu_photo/".$pname);
			
			$r=mysql_query("update menu set photo='$pname' where id='$id'");
			$_SESSION["err"]="Restaurant Menu Added Successfully";
			header("location:menu.php");
		
	}
	else
		echo mysql_error();
?>