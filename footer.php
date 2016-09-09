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
								echo"<br/><tr><td><br/>&nbsp;Opening And Closing Time :</td></tr><tr>
											<td align='center'><br/>",$row[8],"-",$row[9],"</td></tr>";
								
							}
							?>
							<tr>
								<td><BR/><img src='Images/coffee.jpg' height='300' width='250'></td>
							</tr>
							<tr>
								<td><img src='Images/images2.jpg' height='300' width='250'></td>
							</tr>
								
					</table>
				</div>		
				<div id='Footer'>
				<span style='font-size:15pt'>&copy; CopyRight Of Online Restaurant 2016-2017</span></br/>
					<a href='home.php' style='color:LightSalmon;font-size:14pt'>Home</a>&nbsp;
					<a href='aboutus.php' style='color:LightSalmon;font-size:14pt'>About Us</a>&nbsp;
					<a href='feedback.php' style='color:LightSalmon;font-size:14pt'>Feedback</a>&nbsp;
					<a href='faq.php' style='color:LightSalmon;font-size:14pt'>Faq</a>&nbsp;
					<a href='privacy.php' style='color:LightSalmon;font-size:14pt'>Privacy Policy</a>&nbsp;
					<br/>
					<a href='httpP://google.com'><img src='Images/google.png' height='30' width='30'></a>&nbsp;
					<a href=''><img src='Images/W7gYg.jpg' height='30' width='30'></a>&nbsp;
					<a href=''><img src='Images/twit.png' height='30' width='30'></a>&nbsp;
					<a href=''><img src='Images/youtube.png' height='30' width='30'></a>&nbsp;

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