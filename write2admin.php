<?php 
	session_start();
	include('koneksi.php');
	
	$con = mysqli_connect("localhost","root","","buku");
	
	
	if(isset($_POST['title'])){
		$title = $_POST['title'];
		$writer = $_SESSION['user'];
		$cat = $_POST['cat'];
		$cover = $_FILES['cover']['name'];
		$cover_tmp = $_FILES['cover']['tmp_name'];
		$path = "upload/$cover";
		
		$file = $_FILES['book']['name'];
		$file_tmp = $_FILES['book']['tmp_name'];
		
		$path1 = "upload/$file";
		if(move_uploaded_file($cover_tmp, $path) && move_uploaded_file($file_tmp, $path1)){
			$sql  = "INSERT INTO data(judul,penulis, kategori, cover, buku) VALUES ('$title', '$writer', '$cat',' $path', '$path1')";
			
			mysqli_query($con,$sql);
			
			echo "<script> if(window.confirm('Your Upload was Successfull')){window.location = 'adminMenu.php'}else{window.location = 'write.php'}  </script>";
		}else if(move_uploaded_file($cover_tmp, $path)){
			echo "<script> if(window.confirm('Your Upload was Unsuccessfull . Please Insert Book')){window.location = 'write.php'}else{window.location = 'write.php'}  </script>";
		}else if(move_uploaded_file($file_tmp, $path1)){
			echo "<script> if(window.confirm('Your Upload was Unsuccessfull . Please Insert Cover')){window.location = 'write.php'}else{window.location = 'write.php'}  </script>";
		}else{
			echo "<script> if(window.confirm('Your Upload was Unsuccessfull . Please Insert Cover and Book')){window.location = 'write.php'}else{window.location = 'write.php'}  </script>";
		}
		
		mysqli_close($con);
		
		
	}
	
?>