<?php
require("../server.php");
if (isset($_POST["inputan_sph"])) {
    if (inputan_sph($_POST > 0)) {
        echo "<script>
            alert('Selamat Pengajuan Surat Pengukuhan Hutang anda sudah di tambahkan');
            document.location.href = 'Sph.php';
        </script>";
    } else {
        echo "<script>
            alert(' Maaf data Surat Pengukuhan Hutang anda gagal ditambah, Silahkan Coba masukan lagi');
            document.location.href = 'Sph.php';
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman Koperasi</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <!-- Bootstrap core CSS -->
     <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <!-- Header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href=""><i class="fab fa-facebook-square"></i></a> </li>
                <li><a href=""><i class="fab fa-youtube"></i></a> </li>
                <li><a href=""><i class="fab fa-instagram"></i></a> </li>
            </ul>
        </div>
    </div>
    
    <header>
        <div class="container">
            <h1><a href="../Index.html">Surat Pengukuhan Hutang</a> </h1>
            <ul> 
                <li><a href="../Home_anggota.php">Home Anggota</a></li>
                <li><a href="Pinjaman_anggota.php">Pinjaman Anggota</a></li>
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
    <form action="" method="POST">
        <ul>
        <div class="form-group col-md-10">
            <li>
                <label for="No_SPH">No SPH</label>
                <input type="number" class="form-control" name="No_SPH" id="No_SPH">
            </li>
            <li>
                <label for="No_Pinjaman">No Pinjaman</label>
                <?php
                    $list = show("SELECT * FROM pinjaman");
                ?>
                <select name="No_Pinjaman" class="form-control" id="No_Pinjaman">
                    <?php 
                    foreach($list as $dept) { 
                        echo "<option value=".$dept['No_Pinjaman'].">".$dept['No_Pinjaman']."</option>";
                    }
                    ?>
                </select>
            </li>
            <li>
                <label for="No_KTP">No KTP</label>
                <input type="number" class="form-control" name="No_KTP" id="No_KTP">
            </li>
            <li>
                <label for="No_Rek">No.Rekening Bank</label>
                <input type="number" class="form-control" name="No_Rek" id="No_Rek">
            </li>
            <li>
                <label for="Tgl_SPH">Tanggal SPH Ditulis</label>
                <input type="date" class="form-control" name="Tgl_SPH" id="Tgl_SPH">
            </li>
            <li>
                <label for="Jml_Cair">Jumlah_cair</label>
                <input type="number" class="form-control" name="Jml_Cair" id="Jml_Cair">
            </li>
            <li>
                <label for="Bunga">Bunga</label>
                <input type="number" class="form-control" name="Bunga" id="Bunga">
            </li>
            <li>
                <label for="Jangka_Waktu">Jangka_Waktu</label>
                <input type="text" class="form-control" name="Jangka_Waktu" id="Jangka_Waktu">
            </li>
            <li>
                <label for="Tgl_Lunas">Tanggal Lunas</label>
                <input type="date" class="form-control" name="Tgl_Lunas" id="Tgl_Lunas">
            </li>
            </div>
            <br>
                <button class="button" type="submit" name="inputan_sph">insert</button>
        </ul>
    </form>


        </div>
    </section> 
    
 
</body>
</html>