<?php
$conn=mysqli_connect("localhost","root","");

if (mysqli_connect_errno()) { 
	echo "gagal konek ke MYSQL".
	mysqli_connect_error();
}

$sql="CREATE DATABASE buku";

if(mysqli_query($conn,$sql)){
	echo "data base sukses di buat";
}else{
	echo"error  di buat ".mysqli_error($conn);
}
mysqli_close($conn);

?>