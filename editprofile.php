<?php
	session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title> Edit Profile </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
	<style>
		body{
				background: url('gambar/backeditpro.jpg');
				background-size: cover;
			}
		.kotak{
				color: white;
				text-align: center;
				border: 1px solid white;
				border-radius: 50px;
				background: rgba(255,228,225,0.3);
				padding: 10px;
				margin: 20px;
				margin-top: 100px;
				width: 500px;
				font-family : Bebas Neue;
				font-size: 17px;
		}
		.input{
			border: 1px solid black;
			border-radius: 10px;
			padding: 2px 0px 2px 10px;
			background: transparent;
			transition: 2s;
		}
		.input:focus{
			background: linen;
			color: purple;
		}
		.submit{
			border: 1px solid white;
			border-radius: 30px;
			margin: 20px;
			background: indigo;
			color: white;
			transition: 2s;
			font-family : Bebas Neue;
			font-size: 25px;
			padding: 5px 10px 5px  10px;
		}
		.submit:hover{
			background: lavender;
			color: indigo;
		}
		input[type="file"]{
			display: none;
		}
		label{
			border: 1px solid green;
			border-radius: 10px;
			padding: 5px;
			background: lightgreen;
			display: table;
			color: green;
		}
		label:hover{
			background: green;
			color: lightgreen;
		}
	</style>
</head>
	
<body>

	<?php include("navigation.php"); ?>

<center>
<div class = "kotak">
	<h1> Edit Profile </h1>

	<?php
		
		$user = $_SESSION['uname'];
		
		include ('koneksi.php');
		
		$con = mysqli_connect("localhost","root","","buku");
		$result = mysqli_query($con,"SELECT * FROM user_info");
		while( $row = mysqli_fetch_array($result)){
			if($row[1] == $user ){
				$id = $row[0];
				$uname = $row[1];
				$first = $row[3];
				$last = $row[4];
				$email = $row[5];
				$gender = $row[6];
				$profile = $row[7];
			}
		}
		echo "Hi ,". $first;
		
	?>
			
			<form method = "post" action="" enctype='multipart/form-data'>
				
				<br><br>
				<img src = "<?php echo $profile; ?> " style="height: 300px; width: 300px; border: 1px solid black; border-radius: 50%;">
				<br>
				<center>
				<label id="file"> Choose Photo 
					<input type="file" name='profpic' id="profile_picture" value="<?php echo $profile; ?> ">
				</label>
				</center>
				<br>
				First Name : <input type="text" value="<?php echo $first ?>" name="first" class="input"> 
				<br><br>
				Last Name : <input type="text" value="<?php echo $last ?>" name="lasts" class="input"> 
				<br><br>
				Username : <input type="text" value="<?php echo $uname ?>" name="username" class="input">
				<br><br>
				Email :  <input type="text" value="<?php echo $email ?>" name="email" class="input">
				<br><br>
				Gender : <?php echo $gender ?>
				<br><br>
				<input type="submit" name="submit" value="submit" class="submit"> 
			</form>
</div>
</center>

		<?php include("footer.php"); ?>

</body>
</html>
	
<?php
if(isset($_POST['submit'])){
		$first = $_POST['first'];
		$last = $_POST['lasts'];
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$image = $_FILES['profpic']['name'];
        $image_temp = $_FILES['profpic']['tmp_name'];
        $path = "upload/$image";
		
		if(isset($image)){
            if(!empty($image)){
                move_uploaded_file($image_temp, $path);
            }
        }
		
		$result ="UPDATE `user_info` SET `Username` = '$uname', `FirstName` = '$first', `LastName` = '$last', `Email` = '$email' WHERE `user_info`.`userID` = $id";
		
		if(mysqli_query($con, $result)){
			echo "already changed";
			$_SESSION['uname'] = $uname;
			$_SESSION['user'] = $first;
		}
		
		if($path != "upload/"){
			$foto = $result ="UPDATE `user_info` SET Profile_Pic = '$path' WHERE `user_info`.`userID` = $id";
			mysqli_query($con, $foto);
		}
		header("Location: edit.php");
}
?>

