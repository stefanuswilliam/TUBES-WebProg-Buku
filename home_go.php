<?php
	session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Home </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="search.js"></script>
		<style>
			header{
				background: url('gambar/bghome.jpg') no-repeat;
				background-size: 100% 100%;
			}
			.read,.write{
				width: 170px;
				float:left;
				padding: 20px;
				margin-left: 290px;
			}
			.read{
				border: 1px solid white;
				border-radius: 10px;
				background: black;
				transition: 2s;
				color: white;
				font-family : Bebas Neue;
			}
			.read:hover{
				background: transparent;
				border: none;
			}
			.write{
				border: 1px solid white;
				border-radius: 10px;
				background: black;
				transition: 2s;
				color : white;
				font-family : Bebas Neue;
			}
			.write:hover{
				background: transparent;
				border: none;
			}
			.warna{
				padding: 30px 0 30px 0;
			}
			.btn,.btn1{
				border-radius: 10px;
				width: 100px;
				font-size: 30px;
			}
			.btn{
				border: 1px solid red;
				background: red;
				color: white;
				transition: 2s;
			}
			.btn1{
				border: 1px solid green;
				background: green;
				color: white;
			}
			.btn:hover{
				border: 1px solid darkred;
				background: darkred;
				transition: 2s;
			}
			.btn1:hover{
				border: 1px solid darkgreen;
				background: darkgreen;
				transition: 2s;
			}
			.sideleft{
				margin-left: 525px;
				margin-top: 100px;
				width : 450px;
				height : 350px;
			}
			h2 {
				color : white;
				font-family: Bebas Neue;
				text-align : center;
			}
			hr {
				color : white;
				width : 400px;
			}
			.uses{
				color : white;
				font-family:Bebas Neue;
				font-size:30px;
			}
			.bingkai {
				border : 1px solid maroon;
			}
			.bingkai:hover{
				border : 3px solid maroon;
			}
			#display{
				border: 1px solid black;
				background: white;
				width: 170px;
				border-radius: 10px;
				padding-left: 10px;
			}
			#display a:hover{
				cursor: pointer;
				color: lightskyblue;
			}
		</style>
	<head>
	<body>
		<?php include("navigation.php"); ?>
	
		
		<header>
			<form id ="search" action="search.php" method="get" name="cari">
					<input id="search2" type="text" name="search" placeholder="Search"/>
					<input id="button" type="submit" value="GO"/>
					<div id="display"></div>
			</form>
			<img class="sideleft" src="gambar/logo2.gif">
			
		<br><br>
		
	
		<div>
			<h2>Daily Books</h2>
			<hr>
			<hr>
			<center>
			<?php
				include("koneksi.php");
				$con = mysqli_connect("localhost","root","","buku");
				
				$result = mysqli_query($con, "SELECT MAX(id) FROM data");
				while($a = mysqli_fetch_array($result)){
					$max = $a[0];
				}
				$result = mysqli_query($con, "SELECT MIN(id) FROM data");
				while($a = mysqli_fetch_array($result)){
					$min = $a[0];
				}
				
				$random = mt_rand($min,$max);
				$result = mysqli_query($con, "SELECT * FROM data");
				while($row = mysqli_fetch_array($result)){
					if($row[0] == $random){
						echo "<p class='uses'>This is The Best Daily Book~! , Go Get it.<br></p>";
						echo "<img class = 'bingkai'src='$row[4]' style='width: 400px'; id='buku'><br>";
						echo "<a href='$row[5]'><p class='uses'>Read The Book Now ~!!<br></p></a>";
					}
					
				}
			?>
			</center>
			<hr>
			<hr>
		</div>
		<center>
	
		</header>
		
		<?php include("footer.php"); ?>
	</body>
</html>
