<?php
	$con = mysqli_connect("localhost", "root", "", "buku");
	$result = mysqli_query($con, "SELECT * FROM user_info");
    $kategori = "Admin";
	
	while($row = mysqli_fetch_array($result)){
		if($row[1] == $kategori){
			echo "<img src ='$row[7]'>";
		}
	}
?>