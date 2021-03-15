<?php
	include("onlyregis.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Write </title>
		<link rel="stylesheet" type="text/css" href="write_style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="search.js"></script>
		
		<style>
			body{
				font-family : "Bebas Neue";
			}
			.center{
				
				text-align: center;
				border: 1px solid black;
				border-radius: 15px;
				padding: 10px;
				width: 500px;
				margin-left: 500px;
				
			}
			h1{
				font-size: 30px;
				text-align: center;
			}
			h2,p{
				font-family: Century Gothic;
				text-align: center;
			}
			.submit{
				border: 1px solid black;
				background: transparent;
				border-radius: 10px;
				padding: 5px;
				font-size: 20px;
				transition: 2s;
				
			}
			.submit:hover{
				background: black;
				color: white;
			}
			body{
				background: url(white);
				background-size: cover;
			}
			.input{
				border: 1px solid black;
				border-radius: 10px;
				background: transparent;
				padding: 5px;
			}
			td,th{
				padding: 2px 10px 2px 10px;

			}
			input[type="file"]{
				display: none;
			}
			.cover{
				border: 1px solid black;
				border-radius: 10px;
				padding: 7px;
				background: black;
				display: table;
				color: white;
				transition: 2s;
			}
			.cover:hover{
				background: white;
				color: black;
			}
			.pdf{
				border: 1px solid black;
				border-radius: 10px;
				padding: 7px;
				background: black;
				display: table;
				color: white;
				transition: 2s;
			}
			.pdf:hover{
				background: white;
				color: black;
			}
			
		</style>
	</head>
	<body>
		<div class = "drop" id="drop">
			<a href="adminMenu.php">Menu Admin</a>
			<div id="jam"></div>
		</div>	
			
			<br><br>	
		<h1 class="center"> Upload</h1>
		</center>
			<div class="center">
				<br>
				<form action ="write2admin.php" method="post" enctype="multipart/form-data">
					<p> Title : <input class="input" type="text" name="title" placeholder="Type Your Book Title Here!"required></p>
					<p>Category: 
					<select class="input" name="cat">
						<option value="Education"> Education </option>
						<option value="Motivation"> Motivation </option>
						<option value="Romance"> Romance </option>
						<option value="Thriller"> Thriller </option>
						<option value="SoL"> Slice of Life </option>
						<option value="Fantasy"> Fantasy </option>
						<option value="etc"> etc </option>
					</select>
					</p>
					<center>
					<p>Your Cover: </p>
					<label class="cover"> Choose Your Cover 
						<input type="file" name="cover" accept="image/jpeg,image/jpg,image/x-png>" >
					</label>
					<br>
					<p> Your PDF Book: </p>
					<label class="pdf"> Choose Your PDF Book 
						<input type="file" name="book" accept="application/pdf">
					</label>
					</center>
					<br><br><br>
					<input type="submit" value="Write" class="submit">
				</form>
				
			</div>
			
			
			<br><br><br>
			<h1> YOUR UPLOADED BOOKS : </h1>
			
			<center>
			<table border='1'>
				<tr>
					<th> ID </th>
					<th> Judul </th>
					<th> Kategori </th>
					<th> Cover </th>
				</tr>
				<?php
				$con = mysqli_connect("localhost", "root", "", "buku");
				
				$username = $_SESSION['user'];
				echo "<p style='font-family: Century Gothic'> Penulis : ".$username ."</p>";
				
				$result = mysqli_query($con, "SELECT * FROM data");
				while($row = mysqli_fetch_array($result)){
					
						echo "	<tr>
									<td>$row[0]</td>
									<td>$row[1]</td>
									<td>$row[3]</td>
									<td><a href='$row[5]'><img style='width:175px; height: 185px;' src='$row[4]'></a></td>
								</tr>";
					
				}
				
				?>
				
			</table>
			</center>
			
			<br><br>
			
	</body>
</html>