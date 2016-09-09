<?php
	//blog add in database
	include('db.php');
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$res_name=mysql_real_escape_string($_POST["cafe_name"]);
	$blog=mysql_real_escape_string($_POST["blog"]);
	$commentss=mysql_real_escape_string($_POST["comment"]);
	
	$r=mysql_query("insert into blog(city_name,res_name,blog,commentss)
	values('$city_name','$res_name','$blog','$commentss')");
	if($r)
	{
		
			header("location:blog.php");
		
	}
	else
		echo mysql_error();
?>