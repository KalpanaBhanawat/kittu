<?php
	include('db.php');
	include("head.php");
	$city_name=mysql_real_escape_string($_POST["city_name"]);
	$res_name=mysql_real_escape_string($_POST["cafe_name"]);
	$table=mysql_real_escape_string($_POST["tableno"]);
	$r=mysql_query("insert into table_book(city_name,res_name,table_no)
					values('$city_name','$res_name','$table')");
	if($r)
	{
		header("location:add_table.php");
	}
	else
		echo mysql_error();
	include("footer.php");
?>