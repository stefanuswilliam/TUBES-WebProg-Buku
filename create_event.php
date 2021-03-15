<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Event Page </title>
		<link rel="stylesheet" type="text/css" href="event_page.css">
		<script src="script.js"></script>
	<head>
	<body>
		<div class = "drop" id="drop">
					<a href="adminMenu.php">Menu Admin</a>
					
					<div id="jam"></div>
		</div>
	
		<header>
			<img class = "posisi" src="gambar/logo.png">
			<form id ="search" name="cari">
					<input id="search2" type="text" name="search" placeholder="Search"/>
					<input id="button" type="submit" value="GO"/>
			</form>
			<center><p>This is Your Form to Create an Event</p>
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="create">
				<p>Insert The Tittle of the Event!</p>
				<input type ="text" name="judul" value=""/>
				<input type="submit" value="Go!"/>
			</form>
			<?php
				session_start();
				include('koneksi.php');
				$con = mysqli_connect("localhost","root","","buku");
				$judul = $_POST['judul'];
				
				if(isset($_POST['judul'])){
					$query = "INSERT INTO detail_event SET judul = '$judul'";
					mysqli_query($con,$query);
					if(mysqli_query($con,$query)){
						echo "<p>Insert Berhasil</p>";
					}
				}
				mysqli_close($con);
			?>
			<p>Go Create Our Event!</p></center>

		</header>
		<?php include("footer.php"); ?>
	</body>
</html>