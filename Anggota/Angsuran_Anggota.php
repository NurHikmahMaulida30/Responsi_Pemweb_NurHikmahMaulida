<?php
require("../server.php");
if (isset($_POST["inputan_angsuran"])) {
    if (inputan_angsuran($_POST > 0)) {
        echo "<script>
            alert('Data Angsuran Pinjaman Anda telah di tambahkan ');
            document.location.href = 'Angsuran_Anggota.php';
        </script>";
    } else {
        echo "<script>
            alert(' Maaf data Angsuran anda gagal ditambah, Silahkan Coba masukan lagi');
            document.location.href = 'Angsuran_Anggota.php';
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
            <h1><a href="../Index.html">Angsuran Pinjaman Anggota</a> </h1>
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
                <label for="Id_Angsuran">Id Angsuran</label>
                <input type="number" class="form-control"  name="Id_Angsuran" id="Id_Angsuran">
            </li>
            <li>
                <label for="No_SPH">No SPH</label>
                <?php
                    $list = show("SELECT * FROM sph");
                ?>
                <select name="No_SPH" class="form-control"  id="No_SPH">
                    <?php 
                    foreach($list as $dept) { 
                        echo "<option value=".$dept['No_SPH'].">".$dept['No_SPH']."</option>";
                    }
                    ?>
                </select>
            </li>
            <li>
                <label for="Tgl_Angsuran">Tanggal Angsuran</label>
                <input type="date" class="form-control"  name="Tgl_Angsuran" id="Tgl_Angsuran">
            </li>
            <li>
                <label for="Jml_Angsuran">Jumlah Angsuran</label>
                <input type="number" class="form-control"  name="Jml_Angsuran" id="Jml_Angsuran">
            </li>
            <li>
                <label for="No_Rek">No Rekening</label>
                <input type="number" class="form-control"  name="No_Rek" id="No_Rek">
            </li>
            <br>
                <button class="button" type="submit" name="inputan_angsuran">insert</button>
        </ul>
    </form>


        </div>
    </section> 
    
 
</body>
</html>