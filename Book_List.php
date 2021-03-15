<html>
<head>
	<meta charset="UTF-8">
	<title> Event Page </title>
	<link rel="stylesheet" type="text/css" href="event_page.css">
	<script src="script.js"></script>
	<style>
		.letak {
			margin-top : 100px;
		}
		body {
				font-family : verdana;
				background-image:url('gambar/bgfd3.png');
		}
		.table1 {
			font-family: sans-serif;
			color: #232323;
			border-collapse: collapse;
		}
 
		.table1, th, td {
			border: 1px solid #999;
			padding: 8px 20px;
		}
	</style>
</head>
<body>
    <div class = "drop" id="drop">
		<a href="adminMenu.php">Menu Admin</a>
					
		<div id="jam"></div>
	</div>
	<div class ="letak">
	<center>
		<form action="del_row.php" enctype="multipart/form-data" method="post">
			<table class="table1">
				<tr>
					<th>ID</th>
					<th>Judul</th>
					<th>Cover</th>
					<th>Pengarang</th>
					<th>Preview</th>
					<th>Genre</th>
					<th>Delete?</th>
				</tr>
				<?php
					$con = mysqli_connect("localhost", "root", "", "buku");
					$result = mysqli_query($con, "SELECT * FROM data");
					while($row = mysqli_fetch_array($result)) {
						echo "<tr>
							<td>$row[0]</td>
							<td>$row[1]</td>
							<td><img src ='$row[4]' width = 300px height = 300px;></td>
							<td>$row[2]</td>
							<td><iframe src='$row[5]' width:200px height=400 frameborder=0></iframe></td>
							<td>$row[3]</td>
							<td><center><input type='checkbox' name='check[]' value='$row[0]'></center></td>
						</tr>";
					}
				?>
			</table>
			<br>
			<input type="submit" name="delete" value="Delete Checked">
		</form>
	</center>
	</div>
</body>
</html>