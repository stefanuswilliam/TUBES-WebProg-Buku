<div class = "drop" id="drop">
	<a href = "home_go.php"> Home </a>
	<a href = "read_page.php"> Read </a>
	<a href = "#event_page.html"> Event </a>
	<a href = "#about.php"> About Us </a>
	<?php
		if( $_SESSION == false ){
			echo "<a style='float: right;margin-top: -2px;margin-right: 30px;' href = 'login.php'> Please Login </a> ";
		}else{
			echo "<a style='float: right; margin-right: 30px;margin-top: -2px' href = 'logout.php'> [Logout] </a><a style='float: right;margin-top: -2px;' href= 'edit.php'>".$_SESSION['user']."</a>";
		}

	?>
	
	
</div>