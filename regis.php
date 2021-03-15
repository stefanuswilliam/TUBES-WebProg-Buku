<?php 
	session_start(); 
	include('koneksi.php');

		$con = mysqli_connect("localhost", "root", "","buku");
		if(isset($_POST['submit'])){
			$firstname = $_POST['first'];
			$lastname = $_POST['last'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = md5($_POST['passw']);
			$gender = $_POST['jk'];
			$path_pic = $_FILES['myfile']['name'];
			$path_pic_temp = $_FILES['myfile']['tmp_name'];
			$path_size = $_FILES['myfile']['size'];
			$path = "upload/$path_pic";

			$ada = false;
			
			
			$result = mysqli_query($con, "SELECT * FROM user_info");
			while($row = mysqli_fetch_array($result)){
				if($row[5] == $email || $row[1] == $username){
					$ada = true;
				}
			}
			
			if($ada == true){
				echo "<script>  if(window.confirm('Error Registering. Your email or your username have already registered. ')){window.location = 'register.php'}else{window.location = 'register.php'}  </script>";
				
			}else{
			
				if($path_size > 1097152){
				echo "<script> if(window.confirm('Image size must be below 1 mb')){window.location = 'register.php'}else{window.location = 'register.php'} </script>";
				
				}else{
					move_uploaded_file($path_pic_temp, $path);
					
				
					$sql = "INSERT INTO user_info (Username,FirstName,LastName,Pasword,Gender,Profile_pic,Email) VALUES ('$username', '$firstname', '$lastname','$password','$gender','$path','$email')";
					
					if(mysqli_query($con, $sql)){
						echo "<script> if(window.confirm('You Has Been Registered. Please Login!')){window.location = 'login.php'}else{window.location = 'register.php'}  </script>";
					}else{
						echo "<script> if(window.confirm('Error Registering. ')){window.location = 'register.php'}else{window.location = 'register.php'}  </script>";
					}
				}
			}
		}
			mysqli_close($con);
		
	?>