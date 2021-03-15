<?php

$con=mysqli_connect("localhost","root","","buku");
 if(mysqli_connect_errno($con)){
	 echo "koneksi gagal".mysqli_connect_error();
 }
 mysqli_close($con);



?>