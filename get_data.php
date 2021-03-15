<?php
	$con = mysqli_connect("localhost", "root", "", "buku");
	$result = mysqli_query($con, "SELECT * FROM data");
    $row = mysqli_fetch_array($result);
	
		echo"<tr>
				<td>
					Book Detail<br>
					Title : $row[1]<br>
					Write by : $row[2]<br>
					Genre : $row[3]<br>
				</td>
			</tr>";
		echo "<tr>
				<td><iframe src='$row[5]' width:600px height=400px frameborder=0></iframe></td>
			</tr>";
?>