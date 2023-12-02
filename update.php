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

                    $admin_karyawan = $_GET['admin_karyawan'];
                    $hasil = mysqli_query($conn, "SELECT * FROM shipping WHERE admin_karyawan=$admin_karyawan");

                    while($data = mysqli_fetch_array($hasil)){
                        $id_karyawan = $data['id_karyawan'];
                        $nama = $data['nama'];
                        $NO_HP = $data['NO_HP'];
                    }
                ?>
                <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                    <div class="form group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" value="<?php echo $nim; ?>" readonly>
                    </div>
                    <div class="form group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
                    </div>
                    <divc class="form group">
                        <label for="exampleFormRadioButton">Kelas</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kelas" id="kelas1" value="1" <?php if($kelas == 1){ echo 'checked';}?>>
                            <label class="form-check-label" for="exampleRadios1">
                                Reguler
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kelas" id="kelas2" value="2" <?php if($kelas == 2){ echo 'checked';}?>>
                            <label class="form-check-label" for="exampleRadios2">
                                Internasional
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Rombel</label>
                        <select class="form-control" name="rombel">
                            <option value="1" <?php if($rombel==1){echo "selected";}?>>1</option>
                            <option value="1" <?php if($rombel==2){echo "selected";}?>>2</option>
                            <option value="1" <?php if($rombel==3){echo "selected";}?>>3</option>
                            <option value="1" <?php if($rombel==4){echo "selected";}?>>4</option>
                        </select>
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
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $rombel = $_POST["rombel"];

        $query = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', rombel='$rombel' WHERE nim='$nim'";
        $hasil = mysqli_query($conn, $query);

        if($hasil){
            header("Location: index.php");
        } else {
            echo "Data Gagal Ditambah";
        }
    }
?>
