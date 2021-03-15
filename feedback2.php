<?php include('onlyregis.php') ?>
<head>
	<meta charset="UTF-8">
	<title> Feedback </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<style>
		form{
			margin: 30px;
			text-align: center;
		}
		body {
			font-family : verdana;
			background-image:url('gambar/bgfd2.jpg');
		}
	</style>
</head>
<body>
	<div class = "drop" id="drop">
		<a href = "home_go.php"> Home </a>
		<a href = "read_page.php"> Read </a>
		<a href = "write.php"> Write </a>
		<a href = "event_page.php"> Event </a>
		<a href = "about.php"> About Us </a>
					
		<div id="jam"></div>
	</div>
		
		<br><br>
		<div class="form">
			<form method="POST" action="feedback3.php">
				How About Our Service?<br> 
				<input type="radio" name="satu"value="amazing"> Amazing :) <br>
				<input type="radio" name="satu"value="normal"> Normal <br>
				<input type="radio" name="satu"value="bad"> Very Bad :( 
				<br><br>How About Our Website Appearance?<br> 
				<input type="radio" name="dua"value="amazing"> Amazing :) <br>
				<input type="radio" name="dua"value="normal"> Normal <br>
				<input type="radio" name="dua"value="bad"> Very Bad :( 
				<br><br>How About Our Website Features?<br> 
				<input type="radio" name="tiga"value="amazing"> Amazing :) <br>
				<input type="radio" name="tiga"value="normal"> Normal <br>
				<input type="radio" name="tiga"value="bad"> Very Bad :( 
				<br><br>
				Type Your Advice For Improve Our Web:<br><br>
				<textarea name="advice" rows=10 cols=70>
				</textarea><br>
				<input type="submit">
			</form>
		</div>
		
		<footer>
			<a href = "about.php"> About us </a>
			<a href = "xml/writer.xml"> Writers </a>
			<a href = "#privacy"> Privacy </a>
			<a href = "feedback.php"> Feedback </a>
			<text> &copy  2019 Babon-lib </text>
			<br><br>
			<text>Babon in Your Area</text>
			<hr style="width : 1000px; color : black;">
			<?php
				if( $_SESSION["login"] == false ){
					echo " <p style= 'font-size: 15px;'> Hello! <a style= 'font-size: 15px;' href = 'register.php'> Please Register </a></p> ";
				}else{
					echo " <a href= 'edit.php'> <p style= 'font-size: 15px;'>  Welcome ".$_SESSION['user']." !! </a><a style= 'font-size: 12px;' href = 'logout.php'> [Logout] </a> </p>";
				}

			?>
		</footer>
	</body>
</html>