<?php 
	include('pleaselogout.php');
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Login </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="script.js"></script>
		<style>
			body{
				background: url(gambar/backlogin.jpg);
				background-size: cover;
			}
			.login{
				text-align: center;
				margin-bottom: 8%;
				border: 1px solid black;
				border-radius: 15px;
				padding: 15px;
				width: 500px;
				margin-left: 400px;
				margin-top: 150px;
				background: rgba(128,128,128,0.1);
				font-family : Bebas Neue;
				color : white;
			}
			h1{
				text-align: center;
				font-family: Bebas Neue;
			}
			.input{
				border-radius: 10px;
				padding-left: 5px;
			}
			.input:focus{
				background-color: lightgrey;
			}
			.button{
				border: 1px solid black;
				background: rgba(128,128,128,0.2);
				border-radius: 10px;
				padding: 5px;
				transition:2s;
			}
			.button:hover{
				background-color: black;
				color: white;
			}
			td {
				color : white;
			}
		</style>
	<head>
	<body>
	<div class="login">
		<h1> Login </h1>
		
			<form method="post" name="pendaftaran" action="loginphp.php">
			<table border=0 align="center" cellpadding=5 cellspacing=0>
			<tr>

			<tr>
			<td>Username</td><td>:</td><td><input class="input" type="text" name="username"required="required"></td>
			</tr>

			<tr>
			<td>Password</td><td>:</td><td><input class="input" type="password" name="password"required="required"></td>
			</tr>
			
			<tr>
		</table>
			<input type="checkbox" name="remember" value="yes"> Remember Me <br><br>
			
			<input class="button" type="submit" name="submit" value="Login!">
			<hr>
			<p> Don't have an account? <a href="register.php">Register</a></p>
			<p> Forgot Password? <a href="forgot.php"> Click Here </a></p>

	</form>
	</div>
	</body>
</html>
