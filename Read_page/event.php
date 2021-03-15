<?php
	$con = mysqli_connect("localhost", "root", "", "buku");
	$result = mysqli_query($con, "SELECT * FROM detail_event");

	$i = 1;
	echo "<table class='fixed-th'>
				<thead>
					<tr>
					<th>No</th>
					<th>Detail</th>
					</tr>
				</thead>";
	while($row = mysqli_fetch_array($result)){
		echo "<tbody>
				<tr>
					<td>$i</td>
					<td><a href ='event_klik.php'>$row[1]</a></td>
				</tr>
			</tbody>";
		$i++;
	}
		echo "</table>";
	mysqli_close($con);
?>