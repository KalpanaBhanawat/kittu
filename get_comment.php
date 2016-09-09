<?php

include('db.php');
$blog_id=$_POST["blog_id"];
$comments=$_POST["comments"];

$r=mysql_Query("insert into comments(blog_id,comments)values('$blog_id','$comments')");


$sql=mysql_query("select * from comments where  blog_id='$blog_id'  order by id desc");
echo "<table width='80%' align='center'>";
while($rows=mysql_Fetch_Array($sql))
{
	
	echo "<tr><td>",$rows[2],"</td></tr>";
	
	echo "<tr><td>&nbsp;<hr/></td></tr>";
}

echo "</table>";
?>
