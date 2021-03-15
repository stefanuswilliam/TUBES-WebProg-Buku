<?php 
	include('pleaselogout.php');
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Register </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="script.js"></script>
		<style>
			.regis{
				border : 1px solid black;
				border-radius : 30px;
				padding: 10px;
				background: rgba(255,255,255,0.2);
				width: 500px;
				margin-left: 430px;
				margin-top: 70px;
				margin-bottom: 20px;
			}
			form{
				padding: 20px;
				text-align: center;
			}
			.button{
				border : 1px solid black;
				border-radius: 10px;
				background-color: rgba(255,255,255,0.2);
				padding: 10px;
				transition: 2s;
				font-size: 20px;

			}
			.button:hover{
				background-color: black;
				color: white;
				font-size: 20px;
			}
			body{

				background-size: 100%;
			}
			h1{
				text-align: center;
				margin-top: 50px;
				font-family: Copperplate Gothic Light;
			}
			.input{
				border-radius: 10px;
				padding-left: 5px;
			}
			.input:focus{
				background-color: lightgrey;
			}
			.login{
				text-align: center;
				color: grey;
				text-decoration: none;
			}
			table{
				margin-left: 90px;
			}
		</style>
	<head>
	<body>			
			<br>

		<div class = "regis">
			<h1> Register Here!! </h1>
			
		<form method="post" action="regis.php" enctype="multipart/form-data">
				<table>
				<tr>
					<td>FirstName :</td>
					<td><input class="input" type="text" name="first" required></td>
				</tr>
				<tr>
					<td>LastName  :</td>
					<td><input class="input" type="text" name="last" required></td>
				</tr>
				<tr>
					<td>Email	  :</td>
					<td><input class="input" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required></td>
				</tr>
					<td>Username  :</td>
					<td><input class="input" type="text" name="username" required></td>
				</tr>
					<td>Password  :</td>
					<td><input class="input" type="password" name="passw" required></td>
				</tr>
				</table>
				
				Gender    :<input class="input" type="radio" name="jk" value="female">Female<input type="radio" name="jk" value="male" required> Male
				<br><br>
				Profile Picture :
				<br>
				<input type = "file" name="myfile" accept="image/*" required><br><br>
				<button class="button" value="submit" name="submit" >Register </button>
				
			</form>
			
			<hr>
			<div class="login">
				<p> Already have an account? <a href = "login.php"> Login </a></p>
			</div>
		</div>
		
		
			<br>
			
		<footer>
			<a href = "about.php"> About us </a>
			<a href = "xml/writer.xml"> Writers </a>
			<a href = "#privacy"> Privacy </a>
			<a href = "feedback.php"> Feedback </a>
			<text> &copy  2019 Babon-lib </text>
			<br><br>
			<text>Babon in Your Area</text>
		</footer>
	</body>
</html>

