

<?php 
	session_start(); 
	include('koneksi.php');

   
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$con = mysqli_connect("localhost","root","","buku");
		if(mysqli_connect_errno()){
			echo "Failed to Connect";
		}
		
		$result = mysqli_query($con,"SELECT * FROM user_info where Username = '$username' and Pasword='$password'");
		$Finalresult = False;

		while($row = mysqli_fetch_row($result)){
			if($row[1] == $username && $row[2] == $password){
					$Finalresult = True;
					$_SESSION['login'] = True;
					$_SESSION['uname'] = $row[1];
					$_SESSION['user'] = $row[3];
					$_SESSION['tipe'] = $row[8];
					if(isset($_POST['remember'])){
						setcookie('login',"true",time()+3600);
						setcookie('uname',$row[1],time()+3600);
						setcookie('user',$row[3],time()+3600);
						setcookie('tipe',$row[8],time()+3600);
					}
				}
			}
		
		if($Finalresult && $_SESSION['tipe']!= "admin"){
			header('Location: index.php');
		}else if($Finalresult && $_SESSION['tipe']== "admin"){
			header('Location: adminMenu.php');
		}else{
			header('Location: login.php');
		}
	
?>
