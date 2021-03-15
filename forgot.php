<?php session_start() ?>
<head>
	<meta charset="UTF-8">
	<title> Forgot </title>
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
		
	<br><br><br><br>
	<p> Forgot Password? </p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Email : <input type = "email" name = "email" required><br>
		Username : <input type= "username" name = "username" required><br>
		New Password : <input type = "password" name = "password" required><br>
		<input type="submit">
	</form>
	
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
	</footer>
</body>

<?php
	
	if(isset($_POST['email'])){
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pass = md5($_POST['password']);
		
		$con = mysqli_connect("localhost","root","","buku");
		if(mysqli_connect_errno()){
				echo "Failed to Connect";
			}
			
			$result = mysqli_query($con,"SELECT * FROM user_info where Username = '$username' and Email='$email'");
			$ada = false;
			
			while($row = mysqli_fetch_row($result)){
				if($row[1] == $username && $row[5] == $email){
					$ada = true;
				}
			}
			
			if($ada == false){
				echo "Please Insert Email and Username Correctly";
			}else{
				$result = mysqli_query($con,"UPDATE user_info SET Pasword = '$pass' WHERE Username = '$username' and Email='$email'");
					
					
				if($result){
					echo "Password already changed";
				}
			}
	}

	
?>