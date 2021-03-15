<?php
	session_start();
	if($_SESSION == true){
		echo "<script> if(window.confirm('Please Logout To Access. ')){window.location = 'logout.php'}else{window.location = 'home_go.php'}  </script>";
	}
?>