<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Praktikum Antar Muka</title>
</head>

<body>
  <div class="container">
    <center>
      <h3>Masukkan Data Barang</h3>
      <form action="create_barang.php" method="post" name="form1">
        <table width="50%" border="0">
          <tr>
            <td>Id Pengiriman</td>
            <td><input type="text" name="id_pengiriman"></td>
          </tr>
          <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang"></td>
          </tr>
          <tr>
            <td>Jenis </td>
            <td><input type="number" name="jenis_barang"></td>
          </tr>
          <tr>
            <td>Berat</td>
            <td><input type="number" name="berat_barang"></td>
          </tr>
          <tr>
            <td>Biaya Pengiriman</td>
            <td><input type="number" name="harga_barang"></td>
          </tr>
          <td></td>
          <td><input class="btn btn-success" type="submit" name="Submit" value="Tambah Data"></td>
          </tr>
        </table>
      </form>

      <?php

      // Check If form submitted, insert form data into users table.
      if (isset($_POST['Submit'])) {
        $id_barang = $_POST['id_barang'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $jenis = $_POST['jenis'];



        // include database connection file
        require 'connection.php';

        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO tbl_barang(id_barang, nama, harga, stok, jenis) VALUES('$id_barang', '$nama', '$harga', '$stok', '$jenis')");

        // Show message when user added
        echo "Data berhasil ditambahkan  <a class='btn btn-primary' href='index.php'>Lihat Data</a>";
      }
      ?>
      <br>
      <a href="index.php" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Kembali</a>

    </center>

  </div>

</body>

</html>