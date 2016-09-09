<?php
session_start();
	//gallery add in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$cafe_name=mysql_real_escape_string($_POST["cafe_name"]);
	
	$r=mysql_query("insert into gallery(city_name,res_name)
	values('$city_name','$cafe_name')");
	if($r)
	{
		$id=mysql_insert_id();
			$pname=$id.".jpg";
			$photo=move_uploaded_file($_FILES["ph"]["tmp_name"],"gallery_photo/".$pname);
			
			$r=mysql_query("update gallery set photo='$pname' where id='$id'");
			$_SESSION["err"]="Gallery Added Successfully";
			header("location:gallery.php");
		
	}
	else
		echo mysql_error();
?>