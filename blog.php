<?php
	include('head.php');
	include('db.php');
?>
	
	<script  language='javascript'>
		$(document).ready(function()
		{
			$("#btn").click(function()
			{
				var values=document.getElementById("comment").value;
				var blog_id=document.getElementById("blog_id").value;
				
				$.post("get_comment.php",{blog_id:blog_id,comments:values},function(data)
				
				{
						$("#changes").html(data).show();
			});
				
			});
		});
	</script>

<?php	
	$city_name=$_REQUEST["a"];
	$res_name=$_REQUEST["b"];
	
	$r=mysql_query("select * from blog where city_name='$city_name' and res_name='$res_name'");
	
	
	
	echo "<br/><table align='center' cellspacing='0' border='0'>";
		
	if($rows=mysql_Fetch_array($r))
	{
		$blog_id=$rows[0];
	
		echo"<tr><td style='font-weight:bold;font-size:20pt;font-style:italic'>&nbsp;&nbsp;Blog :</td><td><br/><br/>
		<input type='hidden'  value='$rows[0]' id='blog_id'>
		",$rows[3],"</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td style='font-weight:bold;font-size:20pt;font-style:italic' valign='top' width='20%'>&nbsp;&nbsp;Comments :
				</td><td><br/><br/>",$rows[4],
		"</td></tr>";
						echo "<tr><td colspan='2'><div id='changes'>";
	$sql=mysql_query("select * from comments where  blog_id='$blog_id'  order by id desc");
echo "<table width='80%' align='center'>";
echo "<tr><td>&nbsp;<hr/></td></tr>";
while($rows1=mysql_Fetch_Array($sql))
{
		
	
	echo "<tr><td>",$rows1[2],"</td></tr>";
	
	echo "<tr><td>&nbsp;<hr/></td></tr>";
}

echo "</table>";
	echo"</div></td></tr>";
					echo"<tr><td colspan='2' align='center'>
		<textarea rows='4' cols='75' name='comm' placeholder='Write a comment...'
		id='comment'></textarea>&nbsp;&nbsp;<br/>
		<input type='button' value='SEND' id='btn' name='com' 
		align='center' style='color:gray;font-size:12pt'></td></tr>";
			
	}
	
	echo"</table>";
	include('footer.php');

?>