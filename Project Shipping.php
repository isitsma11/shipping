<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6</title>    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <center>
            <h2>Admin Shipping</h2>
        </center>
        <a href="pengiriman.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Pengiriman</a>
        <a href="cek_status_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Cek Status Barang</a>
        <table class="table table-hover-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID_karyawan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                require 'connection.php';
                $hasil = mysqli_query($conn, "SELECT * FROM admin_karyawan")
                ?>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr>";
                    echo "<th>" . $no . "</th>";
                    echo "<td>" . $data['id_karyawan'] . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['NO_HP'] . "</td>";
                    echo "<td>
            <a href='update.php?id_karyawan=$data[id_karyawan]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
            <a href='delete.php?id_karyawan=$data[id_karyawan]' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            </td>";
                    echo "</tr>";
                    $no++;
                } 
                ?>
            </tbody>
            <?php
            
                require 'connection.php';
                $hasil = mysqli_query($conn, "SELECT * FROM kurir")
                ?>
                <table class="table table-hover-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">ID_kurir</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                    
                </tr>


                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr>";
                    echo "<th>" . $no . "</th>";
                    echo "<td>" . $data['id_kurir'] . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['NO_HP'] . "</td>";
                    echo "<td>
            </td>";
                    echo "</tr>";
                    $no++;
                } 
                ?>
            </tbody>
            <div class="container">
        <center>
            <h2>Daftar Kurir</h2>
        </center>
        </table>

        </tbody>
            <?php
            
                require 'connection.php';
                $hasil = mysqli_query($conn, "SELECT * FROM penerima")
                ?>
                <table class="table table-hover-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">id_penerima</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                    
                </tr>


                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr>";
                    echo "<th>" . $no . "</th>";
                    echo "<td>" . $data['id_penerima'] . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data['NO_HP'] . "</td>";
                    echo "<td>
            </td>";
                    echo "</tr>";
                    $no++;
                } 
                ?>
            </tbody>
    </div>
    <div class="container">
        <center>
            <h2>Daftar Penerima</h2>
        </center>
        </table>
    </div>
    </tbody>
            <?php
            
                require 'connection.php';
                $hasil = mysqli_query($conn, "SELECT * FROM pengirim")
                ?>
                <table class="table table-hover-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">id_pengirim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                    
                </tr>


                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr>";
                    echo "<th>" . $no . "</th>";
                    echo "<td>" . $data['id_pengirim'] . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['NO_HP'] . "</td>";
                    echo "<td>
            </td>";
                    echo "</tr>";
                    $no++;
                } 
                ?>
            </tbody>
            
    <div class="container">
        <center>
            <h2>Daftar Pengirim</h2>
        </center>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>

</html>
