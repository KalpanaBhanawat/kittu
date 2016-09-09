<?php
session_start();
	// add functions in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$cafe_name=mysql_real_escape_string($_POST["cafe_name"]);
	$price=mysql_real_escape_string($_POST["price"]);
	$discount=mysql_real_escape_string($_POST["dis"]);
	$facility=mysql_real_escape_string($_POST["fac"]);
	
	$function=mysql_real_escape_string($_POST["fun"]);
	
	$function_name=implode(",",$function);
	$r=mysql_query("insert into functions(city_name,res_name,function_name,price,discount,other_facility)
		values('$city_name','$cafe_name','$function_name','$price','$discount','$facility')");
	if($r)
	{
			$id=mysql_insert_id();
			$pname=$id.".jpg";
			$photo=move_uploaded_file($_FILES["ph"]["tmp_name"],"function_photo/".$pname);
			
			$r=mysql_query("update functions set photo='$pname' where id='$id'");
			$_SESSION["err"]="Restorent Function Added Successfully";
			header("location:function.php");
	}
	else
		echo mysql_error();
?>