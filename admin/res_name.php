<?php
session_start();
	//add city name and res name and photo in database
	
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city"]);
	$cafe_name=mysql_real_escape_string($_POST["cfnm"]);
	
	$r=mysql_query("insert into cafename(city_name,res_name)values('$city_name','$cafe_name')");
	if($r)
	{
			$id=mysql_insert_id();
			$pname=$id.".jpg";
			$photo=move_uploaded_file($_FILES["ph"]["tmp_name"],"res_photo/".$pname);
			
			$r=mysql_query("update cafename set photo='$pname' where id='$id'");
			$_SESSION["err"]="Restorent Added Successfully";
			header("location:add_res.php");
		
		
	}
	else
		echo mysql_error();
	
?>