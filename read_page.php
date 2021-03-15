<?php
	include("onlyregis.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Read Page </title>
		<link rel="stylesheet" type="text/css" href="read_page.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="search.js"></script>
		
	<head>
	<body>
		
		<?php include("navigation.php"); ?>
	
		<header>
			<img class = "posisi" src="gambar/logo.png">
			<form id ="search" action="search.php" method="get" name="cari">
					<input id="search2" type="text" name="search" placeholder="Search"/>
					<input id="button" type="submit" value="GO"/>
					<div id="display"></div>
			</form>
			<center>
			<?php 

				$con = mysqli_connect("localhost", "root", "", "buku");
				$result = mysqli_query($con, "SELECT * FROM data");

				if($result){
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
				}
			?>
			</center>

			<br>
		
		</header>
		
		<?php include("footer.php"); ?>	
	</body>
</html>