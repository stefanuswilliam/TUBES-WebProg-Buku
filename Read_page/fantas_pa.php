<?php
	$con = mysqli_connect("localhost", "root", "", "buku");
	$result = mysqli_query($con, "SELECT * FROM data");
    $kategori = "Fantasy";
	
	while($row = mysqli_fetch_array($result)){
		if($row[3] == $kategori){
			echo "<button class='accordion'>$row[1]</button>
						<div class='panel'>
							<p><center><table border='1'>";
								echo"<tr>
										<td>
											Book Detail<br>
											Title : $row[1]<br>
											Write by : $row[2]<br>
											Genre : $row[3]<br>
										</td>
									</tr>";
								echo "	<tr>
											<td><a href ='$row[5]'> <img src= '$row[4]' width = 300px; height = 300px; ></a></td>
										</tr>";
						echo'</table></center></p>';
						echo'<p>You Can Read by Click the Cover Book!</p>';
						echo '</div>';
		}
	}
?>