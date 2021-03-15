<?php include('onlyregis.php') ?>
<head>
	<meta charset="UTF-8">
	<title> Feedback </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<style>
		body{
			background: url('gambar/backf.jpg');
			background-size: cover;
		}
		.helo{
			margin: 15%;
			text-align: center;
		}
		h1{
			font-size: 60px;
			font-family: bebas neue;
			animation-name:show;
			animation-duration: 5s;
		}
		@keyframes show{
			0% {opacity: 0}
			50% {opacity: 50}
			100% {opacity: 100}
		}
		.text{
			font-family: Lucida Handwriting;
			font-size: 15px;
			animation-name:show1;
			animation-duration: 4s;
		}
		button{
			font-family: bebas neue;
			border: 1px solid black;
			border-radius: 10px;
			background: transparent;
			font-size: 20px;
			margin-top: 15px;
			padding: 0 10px 0 10px;
			transition: 3s;
			animation-name:show1;
			animation-duration: 7s;
		}
		@keyframes show1{
			0% {opacity: 0}
			50% {opacity: 0}
			75% {opacity: 50}
			100% {opacity: 100}
		}
		button:hover{
			font-size: 30px;
			background: black;
			color: lightskyblue;
			animation-name:change;
			animation-duration: 7s;
			animation-iteration-count: infinite;
		}
		@keyframes change{
			0% {background-color: transparent; color: black;}
			25% {background-color: black; color: lightskyblue;}
			50% {background-color: lightskyblue; color:black}
			75% {background-color: black; color: lightskyblue;}
			100% {background-color: transparent; color: black;}
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
		<div class="helo">
			<h1> Hello ,  <?php echo $_SESSION['user']; ?> </h1>
			<text class = "text"> Thanks to join our website and become babonarian. </text> <br>
			<text class = "text"> We need your help to improve our website </text><br>
			<a href="feedback2.php"><button> Let's Start </button></a>
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
				if( $_SESSION == false ){
					echo " <p style= 'font-size: 15px;'> Hello! <a style= 'font-size: 15px;' href = 'register.php'> Please Register </a></p> ";
				}else{
					echo " <a href= 'edit.php'> <p style= 'font-size: 15px;'>  Welcome ".$_SESSION['user']." !! </a><a style= 'font-size: 12px;' href = 'logout.php'> [Logout] </a> </p>";
				}

			?>
		</footer>
	</body>
</html>