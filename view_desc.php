<?php
	include('db.php');
	include("head.php");
	$city_name=$_GET["a"];
	$res_name=$_GET["b"];
	
		$r=mysql_query("select * from cafename  where city_name='$city_name'  and res_name='$res_name'");
		$rows=mysql_Fetch_row($r);
		
		echo"<br/><table cellspacing=0 cellpadding=0 align='center' border='0' width='80%'>";
		
		echo "<tr><td valign='top'>
		
			<table border='0'><tr><td colspan='2'>
		<image src='admin/res_photo/$rows[3]' height=350  width='100%'>
		<br/><br/><a href='bookingfunction.php?a=$city_name&b=$res_name'  style='color:purple'>BOOKING FOR FUNCTION</a><br/>
		<br/>
		<a href='bookingtable.php?a=$city_name&b=$res_name'  style='color:purple'>BOOKING FOR TABLE</a>
		</td></tr>";
		
	
		
	$r=mysql_query("select * from city_name_add_des where city_name='$city_name' and res_name='$res_name'");
	if($row=mysql_fetch_array($r))
	{
		echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td>
		Address : &nbsp;</td><td>",$row[3],"</td></tr>";
		
		echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td valign='top'>Description :</td><td>",$row[4],"</td></tr>";
		
	}
	$r=mysql_query("select * from functions where city_name='$city_name' and res_name='$res_name'");
	if($row=mysql_fetch_array($r))
	{
		echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td valign='top'>
		Function : &nbsp;</td><td>",$row[3],"</td></tr>";
		
		echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td>Price :</td><td>",$row[4],"</td></tr>";
		echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td>Discount :</td><td>",$row[6],"</td></tr>";
			echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		echo"<tr><td valign='top' width='50%'>Other Facility :</td><td>",$row[7],"</td></tr>";
			echo "<tr><td colspan='2'>&nbsp;</td></tr>";
			
			echo "<tr><td colspan='2' align='center'><image src='admin/function_photo/$row[5]' 
				height='300' width='300'></td></tr>";
		
	}
	echo"</table>
	</td>";
	
	$r1=mysql_query("select * from dishes_des where city_name='$city_name' and res_name='$res_name'");
	
	
	echo "<td valign='top' width='40%'><table align='right'>";
		while($row=mysql_Fetch_array($r1))
		{
			
			echo "<tr ><td  align='right' style='border:2px solid black'>
			<image src='admin/dishes/$row[3]' height='200' width='300'><br>$row[4]</td></tr>";
			
			echo "<tr><td colspan='2'>&nbsp;</td></tr>";
		}
	
echo 	
	"</table>";
	echo "</td></tr></table>";
?>
</div>
		<div id='right'>
					<table align='center' cellspacing='0'>
						<?php
							$r=mysql_query("select * from city_name_add_des where city_name='$city_name' and 
										res_name='$res_name'");
							if($row=mysql_fetch_array($r))
							{
								echo"<tr><td colspan='2'>&nbsp;<img src='Images/open1.jpg' height='100' 
								width='100'></td></tr>";
								echo"<br/><tr><td style='font-size:13pt'><br/>&nbsp;Opening And Closing Time :</td></tr><tr>
											<td align='center'><br/>",$row[8],"-",$row[9],"</td></tr>";
								
							}
							$rr=mysql_query("select * from combo_deals where 
								city_name='$city_name' and res_name='$res_name'");
							while($row=mysql_fetch_array($rr))
							{
								echo"<tr><td colspan='2' align='center' style='font-size:17pt;
								color:BurlyWood;font-style:italic'><br/><br/>",$row[3],"</td></tr>";
								echo"<tr><td colspan='2' align='center' style='font-size:13pt'>
								<br/>",$row[4],"</td></tr>";
							}
							?>
						
					</table>
				</div>		
				<div id='Footer'>
				<?php
					if(isset($_REQUEST["a"]) && isset($_REQUEST["b"]))
					{
						$city_name=$_REQUEST["a"];
						$res_name=$_REQUEST["b"];
					?>
					<span style='font-size:15pt'>&copy; CopyRight Of Online Restaurant 2016-2017</span></br/>
					<a href='home.php' style='color:LightSalmon;font-size:14pt'>Home</a>&nbsp;
					<a href='aboutus.php' style='color:LightSalmon;font-size:14pt'>About Us</a>&nbsp;
					<a href='feedback.php' style='color:LightSalmon;font-size:14pt'>Feedback</a>&nbsp;
					<a href='faq.php' style='color:LightSalmon;font-size:14pt'>Faq</a>&nbsp;
					<a href='privacy.php' style='color:LightSalmon;font-size:14pt'>Privacy Policy</a>&nbsp;
					<?php
					}
					?>
					
					<br/>
					<img src='Images/google.png' height='30' width='30'>&nbsp;
					<img src='Images/W7gYg.jpg' height='30' width='30'>&nbsp;
					<img src='Images/twit.png' height='30' width='30'>&nbsp;
					<img src='Images/youtube.png' height='30' width='30'>&nbsp;

				</div>
			</div>
		</body>
</html>

<script>
	var lefts=$("#container").height();
	var rights=$("#right").height();
	
	if(lefts>rights)
		$("#right").height(lefts);
	else
		$("#container").height(rights);
	
</script>