<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Antar Muka Pengguna</title>

    <!-- Memuat file CSS Bootstrap secara luring -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <center><h2>Edit Admin Stuff</h2></center>
        <br>
        <div class="row justfy-content-md-center">
            <div class="col-6">
                <?php
                       require "connection.php";

                       if(isset($_GET['id_karyawan'])) {
                           $id_karyawan = $_GET['id_karyawan'];
                           $hasil = mysqli_query($conn, "SELECT * FROM admin_karyawan WHERE id_karyawan = '$id_karyawan'");
                   
                           while($data = mysqli_fetch_array($hasil)){
                               $id_karyawan = $data['id_karyawan'];
                               $nama = $data['nama'];
                               $NO_HP = $data['NO_HP'];
                           }
                        }
                        
                ?>
                <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                        <label for="id_karyawan">ID_karyawan</label>
                        <input type="text" class="form-control" name="id_karyawan" id="id_karyawan" value="<?php echo $id_karyawan; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
                    </div></div>
                    <div class="form-group">
                        <label for="nama">No HP</label>
                        <input type="text" class="form-control" name="NO_HP" id="NO_HP" value="<?php echo $; ?>">
                    </div>
                    <button type="button" name="batal" onclick="location.href='index.php'" class="btn btn-secondary mb-2">Batal</button>
                    <button type="submit" name="update" class="btn btn-warning mb-2 float-right">Perbarui</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST['update'])){
        $id_karyawan = $_POST["id_karyawan"];
        $nama = $_POST["nama"];
        $NO_HP = $_POST["NO_HP"];
        
        $query = "UPDATE admin_karyawan SET id_karyawan='$id_karyawan', nama='$nama', NO_HP='$NO_HP' WHERE id_karyawan='$id_karyawan'";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            header("Location: index.php");
        } else {
            echo "Data Gagal Ditambah";
        }
    }
?>
