<?php
include('db.php');
	$name=mysql_real_escape_string($_POST["nm"]);
	$email=mysql_real_escape_string($_POST["email"]);
	$message=mysql_real_escape_string($_POST["mae"]);
	$r=mysql_query("insert into contact(name,email_id,message)values('$name','$email','$message')");
	if($r)
	{
		header("location:contactus.php");
	}
	else
		echo mysql_error();
?>