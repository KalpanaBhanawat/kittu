<?php
include('head.php');
include('db.php');
$name=$_POST["nm"];
$email=$_POST["email"];
$feedback=$_POST["feedback"];
$r=mysql_query("insert into feedback(name,email_id,feedback)values('$name','$email','$feedback')");
if($r)
{
	header("location:feedback.php");
}
else
	mysql_error();
?>