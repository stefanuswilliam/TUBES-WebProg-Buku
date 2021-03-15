<?php
	include ("koneksi.php");
	include ("onlyregis.php");

if (isset($_POST['search'])) {
   $Name = $_POST['search'];
   
   $con = mysqli_connect("localhost","root","","buku");
   
   $result = mysqli_query($con, "SELECT judul FROM data WHERE judul LIKE '%$Name%' LIMIT 5");

   while ($Result = mysqli_fetch_array($result)) {
       ?>
   <text onclick='fill("<?php echo $Result['judul']; ?>")'>
   <a>
       <?php echo $Result['judul']; ?>
   </text></a><br>
   <?php
}}
?>