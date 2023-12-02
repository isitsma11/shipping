<?php
    require "koneksi.php";

    $admin_karyawan = $_GET['admin_karyawan'];
    $result = mysqli_query($conn, "DELETE FROM shipping WHERE admin_karyawan=$id_karyawan");

    header("Location: index.php");
?>
