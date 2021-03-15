<?php
	session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Your Profile </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="script.js"></script>
		<style>
			body{
				background: url('gambar/backedit.jpg');
				background-size: cover;
			}
			.kotak{
				color: white;
				text-align: center;
				border: 1px solid white;
				border-radius: 50px;
				background: rgba(30,144,255,0.3);
				padding: 10px;
				margin: 20px;
				margin-top: 100px;
				width: 500px;
				font-family : Bebas Neue;
				font-size: 17px;
			}
			img{
				border: 1px solid black;
				border-radius: 50%;
				margin-bottom: 20px;
			}
			button{
				border: 1px solid white;
				border-radius: 30px;
				margin: 20px;
				background: dodgerblue;
				color: white;
				transition: 2s;
				font-family : Bebas Neue;
				font-size: 20px;
				padding: 5px 10px 5px  10px;
			}
			button:hover{
				color: lightsteelblue;
				background:aliceblue;
			}
			
		</style>
	<head>
	<body>
		
		<?php include("navigation.php"); ?>
		<br>
<center>
	<div class="kotak">
		<h1> Your Profile </h1>
		<?php
			$nama = $_SESSION['user'];
			$user = $_SESSION['uname'];
			
			
			$con = mysqli_connect("localhost","root","","buku");
				if(mysqli_connect_errno()){
						echo "Failed to Connect";
					}
					
			echo " <p> Hi , $nama </p><br> ";
			$result = mysqli_query($con,"SELECT * FROM user_info");
			while($row = mysqli_fetch_array($result)){
				if($row[1] == $user){
					echo "<img src= '$row[7]' style='height: 300px; width: 300px;'> <br>";
					echo "Nama Lengkap : $row[3] $row[4] <br>";
					echo "Username : $row[1] <br>";
					echo "email : $row[5] <br>";
					echo "gender: $row[6] <br>";
					echo "<a href= 'editprofile.php'><button> Edit Your Profile </button></a>";
				}
			}
			
		?>

	</div>
	</center>
<br>

	<?php include("footer.php"); ?>
	</body>
</html>
