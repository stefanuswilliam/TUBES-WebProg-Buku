<?php
	include('koneksi.php');
	$con = mysqli_connect("localhost", "root", "", "buku");
	
	$pass = md5("admin123");
	
	$berhasil = mysqli_query($con, "INSERT INTO user_info (Username, Pasword , FirstName, tipe)VALUES('Admin','$pass','adminKece','admin')");
	
	if($berhasil){
		echo "Admin dengan username: Admin, password: admin123  telah ditambahkan";
	}
?>