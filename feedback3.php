<?php 
include('koneksi.php');
include('onlyregis.php');
 
	if(empty($_POST['satu']) || empty($_POST['dua']) || empty($_POST['tiga'])){
		echo " <h1> Please choose all the question. </h1>";
	}else{
		$satu = $_POST['satu'];
		$dua = $_POST['dua'];
		$tiga = $_POST['tiga'];
		$advice = $_POST['advice'];
		$nama = $_SESSION['user'];
		
		$file = fopen("file/feedback.txt","a") or die ("Unable to upload your answer");
		$txt = "Feedback From - " . $nama . "\r\n" ." Your Service :  ". $satu . "\r\n" ." Your Web Appearance :  ". $dua . "\r\n" ." Your Web Features:  ". $tiga . "\r\n" ." Advice :  ". $advice . "\r\n";
		
		fwrite($file, $txt);
		fclose($file);
		
		echo "<h1 style='padding: 50px;'> Thanks For Your Advice. We will try to be better . </h1>";
	}

?>
<head>
	<meta charset="UTF-8">
	<title> Feedback </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<style>

			
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