<?php
    $con = mysqli_connect("localhost", "root", "", "buku");
    $check = $_POST["check"];
    $a = implode(",", $check);
    mysqli_query($con, "delete from data where id in($a)");
    echo "Buku with ID $a has been deleted successfully"
?>
<br><br>
<h4><a href="Book_List.php">Kembali</a></h4>