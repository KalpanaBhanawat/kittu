<?php
	include('head.php');
	include('db.php');
	
	$city_name=$_REQUEST["a"];
	$res_name=$_REQUEST["b"];
	
	$r=mysql_query("select * from functions where city_name='$city_name' and res_name='$res_name'");
	
	
	
	echo "<br/><table align='center'>";
		echo "<tr><td align='center' colspan='2' style='font-size:20pt;font-weight:bold'>$city_name => $res_name</td></tr>";
		echo"<tr><td colspan='2'>&nbsp;</td></tr>";
		if($rows=mysql_Fetch_array($r))
		{
		
			echo"<tr><td style='font-weight:bold;font-size:17pt;color:BurlyWood;font-style:italic'>
						Events Of Restaurant :</td></tr>
			<tr><td align='center'><br/>";
			
				$event_name=$rows[3];
				$arr=explode(",",$event_name);
				
				for($i=0;$i<count($arr);$i++)
					echo $arr[$i],"<br/><br/>";
				echo "<br/></td></tr>";
			echo"<tr><td colspan='2'>&nbsp;</td></tr>";
			echo"<tr><td colspan='2'>&nbsp;</td></tr>";
			echo"<tr><td colspan='2' align='center'>
				<img src='Images/reserved3.jpg' height='150' width='300'></td></tr>";
		}
		echo"</table>";
		include('footer.php');
?>