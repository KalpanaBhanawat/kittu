<?php
	//codding for insert table booking data in database 
	session_start();
	include('db.php');
	
	$city_name=mysql_real_escape_string($_POST["a"]);
	$res_name=mysql_real_escape_string($_POST["b"]);
	$user_name=mysql_real_escape_string($_POST["nm"]);
	$contact=mysql_real_escape_string($_POST["cn"]);
	$address=mysql_real_escape_string($_POST["add"]);
	$email=mysql_real_escape_string($_POST["email"]);
	$table_no=mysql_real_escape_string($_POST["table_no"]);
	$date=mysql_real_escape_string($_POST["date"]);
	$time=mysql_real_escape_string($_POST["time"]);
	
	$rr=mysql_Query("select * from booking_table  where city_name='$city_name'  and res_name='$res_name' 
					and table_no='$table_no' and date='$date' and time='$time'");
		if($rows=mysql_Fetch_array($rr))
		{
			
			$_SESSION["err"]="Already Reserved<br/><img src='admin/Images/revered.jpg' height='60' width='200'>";
			header("location:bookingtable.php?a=$city_name&b=$res_name");
		}
		else
		{
	
	$r=mysql_query("insert into booking_table(city_name,res_name,user_name,contact,address,email_id,table_no,date,
	time)values('$city_name','$res_name','$user_name','$contact','$address','$email','$table_no','$date','$time')");
	if($r)
	{
		$ids=mysql_insert_id();
		header("location:confirm_table.php?a=$ids&b=$city_name&c=$res_name");
	}
	else
		echo mysql_error();
		}
	
?>