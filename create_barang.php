<!DOCTYPE html>
<html>
<head>
    <title>Praktikum-Antar Muka Pengguna</title>

    <!-- Memuat file CSS Bootstrap secara luring -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div>
        <center><h2>Form Pengiriman</h2></center>
        <br>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
                <div class="form-group">
                    <label for="id_barang">ID Barang</label>
                    <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="ex: brg001">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="ex: Baju">
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" placeholder="ex: Pakaian">
                </div>
                <div class="form-group">
                    <label for="berat_barang">Berat Barang</label>
                    <input type="text" class="form-control" name="berat_barang" id="berat_barang" placeholder="ex: 0.2">
                </div>
                <div class="form-group">
                    <label for="exampleFormRadioButton">Paket Pengiriman</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Jasa Pengiriman" id="pengiriman1" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            Reguler
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Jasa Pengiriman" id="pengiriman2" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                            Express
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jumlah</label>
                    <select class="form-control" name="Jumlah">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    require 'connection.php';

    if(isset($_POST['submit'])) {
        $id_pengiriman = $_POST["id_pengiriman"];
        $nama_barang = $_POST["nama_barang"];
        $jenis_barang = $_POST["jenis_barang"];
        $berat_barang = $_POST["berat_barang"];
        $paket_pengiriman = $_POST["paket_pengiriman"];

        $query = "INSERT INTO pengiriman (id_barang, nama_barang, jenis_barang, berat_barang, paket_pengiriman) VALUES ('$id_barang', '$nama_barang', '$jenis_barang', '$berat_barang', '$paket_pengiriman')";
        $hasil = mysqli_query($conn, $query);
        
        if($hasil){
            header("Location: index.php");
        } else{
            echo "Data Gagal Ditambahkan";
        }
    }
?>
