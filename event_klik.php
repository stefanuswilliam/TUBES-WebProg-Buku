<?php
	include("onlyregis.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Event Page </title>
		<link rel="stylesheet" type="text/css" href="read_page.css">
		<script src="script.js"></script>
		<style>
		img {
			border : 5px solid Yellow;
			margin-top : 50px;
		}
		</style>
	<head>
	<body>
		<div class = "drop" id="drop">
			<a href = "home_go.php"> Home </a>
			<a href = "read_page.php"> Read </a>
			<a href = "write.php"> Write </a>
			<a href = "event_page.php"> Event </a>
			<a href = "about.php"> About Us </a>
					
			<div id="jam"></div>
		</div>
	
		<header>
			<center>
				<br>
				<img src="gambar/good.jpg" width="300px" height="400px">
				<br>
				<p>Success Joined This Event!</p>
				<p>Make Sure You Win The Competition by Upload your best Book!	</p>
			</center>

		</header>
		<footer>
			<a href = "about.us"> About us </a>
			<a href = "xml/writer.xml"> Writers </a>
			<a href = "#privacy"> Privacy </a>
			<a href = "#license"> License </a>
			<text> &copy  2019 Babon-lib </text>
			<br><br>
			<text>Babon in Your Area</text>
			<hr>
			<?php
				echo " <text style= 'font-size: 15px;'>Welcome ".$_SESSION['user']."!! <a style= 'font-size: 12px;' href = 'logout.php'> [Logout] </a> </text>";
			?>

		</footer>
	</body>
</html>