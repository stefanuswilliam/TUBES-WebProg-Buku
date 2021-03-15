<?php session_start() ?>
<html>
	<head>
	<meta charset="UTF-8">
	<title> Landing Page </title>
	
		<style>
		@font-face {
			font-family:"Bebas Neue";
			src: url('fonts/BebasNeue-Regular.ttf');
		}
		@font-face{
			font-family:"Montserrat";
			src: url('fonts/Montserrat-Regular.ttf');
		}
		body{
				background-image: url("gambar/back.jpg");
				background-size: cover;
				position: absolute;
			}
		.bar{
				width: 35px;
				height: 5px;
				background-color: black;
				margin: 6px;
			}
		#drop{
				height: 100%;
				width: 0;
				position: fixed;
				left: 0;
				top: 0;
				background-color: rgba(0,0,0, 0.9);
				overflow-x: hidden;
				transition: 0.7s;
			}
		.konten{
				text-align: center;
		}
		.konten a{
				color: grey;
				font-size: 28px;
				text-decoration: none;
				display: block;
				transition: 0.3s;
				font-family:"Montserrat";
		}
		.konten{
			color: lightgrey;
			font-family:Montserrat;
			font-size: 30px;
		}
		.konten img{
				width: 350px;
				height: 350px;
		}
		.konten a:hover, .konten a:focus{
				color: white
		}
		.close{
				right: 20px;
				top: 20px;
				position: absolute;
				font-size: 30px;
				color: grey;
				text-decoration: none;
				background-color: transparent;
				border: none;
		}
		.close:hover{
				color: white;
		}
		.menu{
				margin: 30px;
		}
		.type {
				font-family: Bebas Neue;
				display: inline-block;
				margin-left: 150px;
				
		}

		.text {
			display: inline-block;
			overflow: hidden;
			animation: typing 3s steps(30, end), blink .75s step-end infinite;
			white-space: nowrap;
			font-size: 80px;
			border-right: 4px solid orange;
			box-sizing: border-box;
			color: black;
			margin-top: 20px;
			font-family : "Bebas Neue";
		}
		
		
		@keyframes typing {
			from { 
				width: 0% 
			}
			to { 
				width: 100% 
			}
		}

		@keyframes blink {
			from, to { 
				border-color: transparent 
			}
			50% { 
				border-color: black; 
			}
		}
		h1, h2 , .start{
				margin-left: 180px;
				font-family: Arial;
		}
		.start{
				text-decoration: none;
				background-color: transparent; 
				border: 2px solid black;
				border-radius: 5px;
				font-size: 30px;
				transition: 2s;
				color: black;
				padding: 6px;
				font-family: "Bebas Neue";
		}
		.start:hover{
				background-color: black;
				color: white;
				font-size: 25px;
		}
		a{
			font-family: "Bebas Neue"; 
		}
		</style>
		
		<script>
			function list(){
				document.getElementById("drop").style.width = "100%";
				document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}
			function closedrop(){
				document.getElementById("drop").style.width = "0%";
				document.body.style.backgroundImage = "url('gambar/back.jpg')";
			}
		</script>
	</head>
	
	<body>
				
		<div id="drop">
			<button class="close" onclick="closedrop()"> X </button>
			<div class="konten">
				<?php
					if($_SESSION == true){
						$user = $_SESSION['user'];
						echo " <p> Welcome $user </p>";
						
						$con = mysqli_connect("localhost", "root", "","buku");
						$result = mysqli_query($con,"SELECT * FROM user_info");
						while($row = mysqli_fetch_array($result)){
							if($row[3] == $user){
								echo "<a href= 'edit.php'> <img src = '$row[7]' style='border: 1px solid black; border-radius: 50%; height: 250px; width: 250px;'></a>";
							}
						}
						
							echo"
							<hr style='color:grey; width:300px'>
							<a href = 'home_go.php' > Home </a>
							<a href = 'read_page.php' > Read </a>
							<a href = 'event_page.php'> Event </a>
							<a href = '#about.php'> About us </a>
							"; 
							
						
					}else{
						
						echo"
							<img style ='margin-top:250px;height : 130px;' src='gambar/logo.png'>
							<a style = 'font-family : Bebas Neue;' href = 'login.php' > Login </a>
							<a style = 'font-family : Bebas Neue;'href = 'register.php' > Register </a>
							
							";
					}
				?>
			</div>
		</div>
		
		<div class="menu" onclick="list()">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
		
			<center>
			<div class="type">
				<div class="text">Happy day with Book!</div>
				</div>
			</div>
			<h1> Welcome to Book World </h3>
			<h2> Read Some Fantastic Book Here!</h2>
			<a class="start" href="home_go.php"> Start Here </a>
			</center>
			
			
	</body>
	
</html>