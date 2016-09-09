<?php
	//add admin form in database
	include('db.php');
	$name=mysql_real_escape_string($_POST["nm"]);
	$password=mysql_real_escape_string($_POST["pass"]);
	$r=mysql_query("insert into login(name,password)values('$name','$password')");
	if($r)
		header("location:home.php");
	else
		echo mysql_error();
?>