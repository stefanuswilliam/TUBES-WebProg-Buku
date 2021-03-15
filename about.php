<?php session_start() ?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> About us </title>
		<link rel="stylesheet" type="text/css" href="about.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="search.js"></script>
		<style>
			header{
				height: 500px;
			}
			.profil p{
				position: absolute;
				left: -190px;
				transition: 0.3s;
				padding: 10px;
				width: 200px;
				text-decoration: none;
				font-size: 20px;
				color: white;
				border-radius: 0 5px 5px 0;
				border: 1px solid black;
				background-color: black;
			}
			.profil p:hover{
				left: -10px;
			}
			#person1{
				top: 650px;
				font-family : Bebas Neue;
			}
			#person2{
				top: 700px;
				font-family : Bebas Neue;
			}
			#person3{
				top: 750px;
				font-family : Bebas Neue;
			}
			#person4{
				top: 800px;
				font-family : Bebas Neue;
			}
			.keterangan{
				height: 600px;
				margin-left: 300px;
			}
			body{
				height: 100%;
				width: 100%;
				
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			}
			#foto{
				height: 500px;
				width: 750px;
			}
			
		</style>
		
		<script>
			function satu(){
				document.getElementById("foto").src="gambar/cin.jpg";
			}
			function dua(){
				document.getElementById("foto").src="gambar/fera.jpg";
			}
			function tiga(){
				document.getElementById("foto").src="gambar/ryu.jpg";
			}
			function empat(){
				document.getElementById("foto").src="gambar/felix.jpg";
			}
		</script>
	<head>
	<body>
	
		<?php include("navigation.php"); ?>
	
		<header>
			<img src="gambar/logo.png">
			<form id ="search" action="search.php" method="get" name="cari">
					<input id="search2" type="text" name="search" placeholder="Search"/>
					<input id="button" type="submit" value="GO"/>
					<div id="display"></div>
			</form>
			<p class ="warna">Mission : Have a great library with babon as a symbol.<br> Vision : Have a great Quality to survive</p>
		</header>
		
			<br style="clear:left;">
			
		<article>
			<h1 style="text-align:center; font-size: 35px; font-family: bebas neue";> Baboon Developer </h1>
			<div id="profile" class="profil">
				<p id="person1" onclick="satu()"> Cintya Kristianto </p>
				<p id="person2" onclick="dua()"> Ferani Christy </p>
				<p id="person3" onclick="tiga()"> Ryuga Eka Setiawan </p>
				<p id="person4" onclick="empat()"> Stefanus Felix </p>
			</div>
			
			<div class="keterangan">
				<img id="foto" src="gambar/cin.jpg">
			</div>
		</article>
		
		<footer>
			<a href = "about.php"> About us </a>
			<a href = "xml/writer.xml"> Writers </a>
			<a href = "#privacy"> Privacy </a>
			<a href = "feedback.php"> Feedback </a>
			<text> &copy  2020 Babon-lib </text>
			<br><br>
			<text>Babon in Your Area</text>
			<hr style="width : 1000px; color : black;">
			<?php
				if( $_SESSION == false ){
					echo " <p style= 'font-size: 15px;'> Hello! <a style= 'font-size: 15px;' href = 'register.php'> Please Register </a></p> ";
				}else{
					echo " <a href= 'edit.php'> <p style= 'font-size: 15px;'>  Welcome ".$_SESSION['user']." !! </a><a style= 'font-size: 12px;' href = 'logout.php'> [Logout] </a> </p>";
				}

			?>
		</footer>
		</footer>
	</body>
</html>