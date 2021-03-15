<?php
	include ("koneksi.php");
	include ("onlyregis.php");
	
	$nama = $_GET['search'];
	$con = mysqli_connect("localhost","root","","buku");
	
	$result = mysqli_query($con , "SELECT * FROM data");
	while($a = mysqli_fetch_array($result)){
		if($a[1] == $nama){
			header("Location: search_go.php?id=$a[5]");
		}
	}
?>