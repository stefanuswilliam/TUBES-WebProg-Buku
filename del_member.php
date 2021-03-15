<?php
	$conn = mysqli_connect("localhost","root","","buku");
	$check = $_POST["member"];
	$arr = implode(",",$check);
	if($arr == "Admin"){
		echo"Admin tidak bisa dihapus ";
	}else{
		mysqli_query($conn, "delete from user_info where username='$arr'");
		echo "User dengan username $arr telah dihapus";
	}
	echo"<br><br><a href='Form_Del_Member.php'>Back</a>"
?>