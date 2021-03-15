<?php
	session_start();
	if($_SESSION == False){
		echo "<script> if(window.confirm('Please Login To Access. ')){window.location = 'login.php'}else{window.location = 'home_go.php'}  </script>";
	}
?>