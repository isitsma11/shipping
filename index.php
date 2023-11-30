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
            <h2>Shipping</h2>
        </center>
        <a href="create_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Pengiriman</a>
        <a href="cek_status_barang.php" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Cek Status Barang</a>
        
        <table class="table table-hover-dark">
            
            <tbody>
                <?php
                require 'connection.php';
                $hasil = mysqli_query($conn, "SELECT * FROM pengirim")
                ?>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_array($hasil)) {
                    echo "<tr>";
                    echo "<th>" . $no . "</th>";
                    echo "<td>" . $data['id_barang'] . "</td>";
                    echo "<td>" . $data['nama'] . "</td>";
                    echo "<td>" . $data['harga'] . "</td>";
                    echo "<td>" . $data['stok'] . "</td>";
                    echo "<td>" . $data['jenis'] . "</td>";
                    echo "<td>
            <a href='edit_barang.php?id_barang=$data[id_barang]' class='btn btn-warning btn-sm' style='font-weight: 600;'>Edit</a>|
            <a href='delete_barang.php?id_barang=$data[id_barang] ' class='btn btn-danger btn-sm' style='font-weight: 600;'>Delete</a>
            </td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>

</html>