<?php
include('head.php');
	//coding for add_res_view
	include('db.php');
	$r=mysql_query("select * from cafename");
	?>
	<br/>
	<fieldset  style='width:600px;height:auto;border:2px solid black;margin:auto;opacity:0.6'>
	<?php
	echo"<br/><table border='1' align='center' cellsapcing='0' cellpaddind='0' width='100%'>";
		echo"<tr><td colspan='4' style='color:red;text-align:center;font-weight:bold;font-size:20pt;border:none'>
		VIEW DATA</td></tr>";
	echo"<tr><td style='font-size:12pt;font-weight:bold'>Id</td>
			 <td style='font-size:12pt;font-weight:bold'>City Name</td>
			 <td style='font-size:12pt;font-weight:bold'>Restorent Name</td>
			 <td style='font-size:12pt;font-weight:bold'>Photo</td><tr>";
			
		 while($row=mysql_fetch_array($r))
		 {
			echo"<tr><td>",$row[0],"</td>";
			echo"<td>",$row[1],"</td>";
			echo"<td>",$row[2],"</td>";
			echo"<td><image src='res_photo/$row[3]' height=120 width=122></td></tr>";
		 
		 }
		 echo"</table>";
		include('footer.php');
?>