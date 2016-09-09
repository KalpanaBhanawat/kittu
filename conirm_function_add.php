<?php
	include('db.php');
	include("head.php");
	$id=$_GET["a"];
	$r=mysql_query("update booking set status=1 where id='$id'");
	if($r)
	{
			header("location:home.php");
	}
	else
		echo mysql_error();
	
	include("footer.php");
?>