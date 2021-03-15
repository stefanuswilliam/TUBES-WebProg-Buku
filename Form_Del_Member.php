<html>
	<head>
		<meta charset="UTF-8">
		<title> Event Page </title>
		<link rel="stylesheet" type="text/css" href="event_page.css">
		<script src="script.js"></script>
		<style>
			.letak {
				margin-top : 230px;
			}
			body {
					font-family : verdana;
					background-image:url('gambar/bgfd.jpg');
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
			<form action="del_member.php" enctype="multipart/form-data" method="post">
			<table class="table1">
				<tr>
					<th>User ID</th>
					<th>Username</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Gender</th>
					<th>Delete?</th>
				</tr>
				<?php
					$conn=mysqli_connect("localhost","root","","buku");
					$res = mysqli_query($conn,"SELECT * FROM user_info");
					while($row = mysqli_fetch_array($res)){
						echo "<tr>
								<td>$row[0]</td>
								<td>$row[1]</td>
								<td>$row[3]</td>
								<td>$row[4]</td>
								<td>$row[6]</td>
								<td>$row[7]</td>
								<td><center><input type='checkbox' name='member[]' value='$row[1]'/></td></center></tr>";
					}
				?>
			</table>
			<br>
			<input type="submit" name="del" value="Delete Checked">
			</form>
		</center>
		</div>
	</body>
</html>