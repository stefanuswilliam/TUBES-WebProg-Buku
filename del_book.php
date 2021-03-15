<?php
    $con = mysqli_connect("localhost", "root", "", "buku");
    $check = $_POST["check"];
    $a = implode(",", $check);
    mysqli_query($con, "delete from db_buku where id in($a)");
    echo "Buku dengan ID $a telah dihapus~!"
?>
<br><br>
<a href="Book_List.php">Kembali</a>