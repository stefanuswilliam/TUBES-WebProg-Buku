<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title> Landing Page </title>
	
		<style>
		@font-family {
			font-face:"Gloss and Bloom";
			src: url ('fonts/Gloss_And_Bloom.ttf');
		}

		@font-family {
			font-face:"Montserrat";
			src: url ('fonts/Montserrat-Regular.ttf');
		}
		body{
				background-image: url("gambar/adminbg.jpg");
				background-size: cover;
				position: absolute;
			}
		.bar{
				width: 35px;
				height: 5px;
				background-color: white;
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
				font-family:Montserrat;
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
				margin-left: 530px;
				
		}

		.text {
			display: inline-block;
			overflow: hidden;
			animation: typing 3s steps(30, end), blink .75s step-end infinite;
			white-space: nowrap;
			font-size: 80px;
			border-right: 4px solid orange;
			box-sizing: border-box;
			color: white;
			margin-top: 20px;
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
				font-family: Century Gothic;
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
				font-family: Bebas Neue;
		}
		.start:hover{
				background-color: black;
				color: white;
				font-size: 25px;
		}
		img {
			 width: 350px; 
			 height: 350px; 
			 border-radius: 50%;
			 margin-left : 550px;
		}
		p {
			font-family : Bebas Neue;
			font-weight  : bold;
			margin-left: 530px;
			font-size : 35px;
			color: white;
			
		}
		</style>
		
		<script>
			function list(){
				document.getElementById("drop").style.width = "100%";
				document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}
			function closedrop(){
				document.getElementById("drop").style.width = "0%";
				document.body.style.backgroundImage = "url('gambar/adminbg.jpg')";
			}
		</script>
	</head>
	
	<body>
				
		<div id="drop">
			<button class="close" onclick="closedrop()"> X </button>
			<div class="konten">
				<img style = "margin-left:-10px;"src="gambar/logo.png">
				<a href = "Form_Del_Member.php">Delete Member</a>
				<a href = "Book_List.php" >Delete Book</a>
				<a href = "create_event.php" >Create Event</a>
				<a href = "writeAdmin.php">Write Book</a>
				<a href = "logout.php">Logout</a>
			</div>
		</div>
		
		<div class="menu" onclick="list()">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>

			<div class="type">
				<div class="text">Welcome Admin!</div>
				</div>
			</div>
			<br>
			<img src="gambar/admin.png">
			<br>
			<p>See ur Menu in Right Top Browser</p>
			
	</body>
	
</html>