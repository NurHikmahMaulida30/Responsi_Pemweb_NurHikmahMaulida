<?php
require("../server.php");
if (isset($_POST["insert_Pinjaman"])) {
    if (insert_Pinjaman($_POST > 0)) {
        echo "<script>
            alert('Permohonan data Pinjaman telah ditambahakan ,Selanjutnya Ajukan Surat Pengukuhan Hutang Anda Pada Halaman Surat Pengukuhan Hutang ');
            document.location.href = 'Pinjaman_anggota.php';
        </script>";
    } else {
        echo "<script>
            alert(' Maaf data Pinjaman anda gagal ditambah, Silahkan Coba masukan lagi');
            document.location.href = 'Pinjaman_anggota.php';
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
            <h1><a href="../Index.html">Pinjaman Anggota Koperasi</a> </h1>
            <ul> 
                <li><a href="../Home_anggota.php">Home Anggota</a></li>
                <li><a href="Sph.php">Surat Pengukuhan Hutang</a></li>
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
    <form action="" method="POST">
        <ul>
            <li>
                <label for="No_Pinjaman">No_Pinjaman</label>
                <input type="text" class="form-control" name="No_Pinjaman" id="No_Pinjaman">
            </li>
            <li>
                <label for="IdAnggota">IdAnggota</label>
                <?php
                    $list = show("SELECT * FROM anggota");
                ?>
                <select name="IdAnggota" class="form-control" id="IdAnggota">
                    <?php 
                    foreach($list as $dept) { 
                        echo "<option value=".$dept['IdAnggota'].">".$dept['IdAnggota']."</option>";
                    }
                    ?>
                </select>
            </li>
            <li>
                <label for="Tanggal_Pinjaman">Tanggal_Pinjaman</label>
                <input type="date" class="form-control" name="Tanggal_Pinjaman" id="Tanggal_Pinjaman">
            </li>
            <li>
                <label for="JML_Pinjaman">JML_Pinjaman</label>
                <input type="number" class="form-control" name="JML_Pinjaman" id="JML_Pinjaman">
            </li>
            <li>
                <label for="Keperluan">Keperluan</label>
                <input type="text" class="form-control" name="Keperluan" id="Keperluan">
            </li>
            <br>
                <button class="button" type="submit" name="insert_Pinjaman">insert</button>
        </ul>
    </form>


        </div>
    </section> 
    
 
</body>
</html>