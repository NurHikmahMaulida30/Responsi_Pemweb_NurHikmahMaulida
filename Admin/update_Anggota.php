<?php
require("../server.php");
$IdAnggota = $_GET["update"];
$data = show("SELECT * FROM anggota WHERE IdAnggota = '$IdAnggota'");
if (isset($_POST["UpAnggota"])) {
    if (UpAnggota($_GET > 0)) {
        echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'Anggota.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diupdate');
            document.location.href = 'Anggota.php';
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
    <title>Simpanan Koperasi</title>
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
            <h1><a href="../Index.html">Simpanan Koperasi</a> </h1>
            <ul>
                <li><a href="Anggota.php">kembali</a></li> 
            </ul>

        </div>
    </header>
    <section id="Visi">
        <div class="container">
    <form action="" method="POST">
        <?php
        foreach ($data as $d) {
        ?>
            <ul>
            <div class="form-group col-md-10">
                <li>
                    <label for="IdAnggota">Id Anggota</label>
                    <input type="text" class="form-control" name="IdAnggota" id="IdAnggota" value=<?php echo $d["IdAnggota"]; ?> readonly>
                </li>
                <li>
                    <label for="Nama_Anggota">Nama Anggota</label>
                    <input type="text" class="form-control" name="Nama_Anggota" id="Nama_Anggota" value=<?php echo $d["Nama_Anggota"]; ?> >
                </li>
                <li>
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" name="Alamat" id="Alamat" value=<?php echo $d["Alamat"]; ?> >
                    
                </li>
                <li>
                    <label for="No_KTP">No KTP</label>
                    <input type="text" class="form-control" name="No_KTP" id="No_KTP" value=<?php echo $d["No_KTP"]; ?>>
                </li>
                <li>
                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="Jenis_Kelamin" id="Jenis_Kelamin" value=<?php echo $d["Jenis_Kelamin"]; ?>>
                </li>
                <li>
                    <label for="No_Telpon">No Telpon</label>
                    <input type="text" class="form-control" name="No_Telpon" id="No_Telpon" value=<?php echo $d["No_Telpon"]; ?>>
                </li>
               
                <li>
                    <label for="Kelas">Kelas</label>
                    <input type="text" class="form-control" name="Kelas" id="Kelas" value=<?php echo $d["Kelas"]; ?>>
                </li>
                <li>
                    <label for="Keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="Keterangan" id="Keterangan" value=<?php echo $d["Keterangan"]; ?>>
                </li>
                <br>
                    <button type="submit" class="button" name=" UpAnggota">update</button>
               
                </div>
            </ul>
        <?php
        }
        ?>
    </form> 
    
    </div>
    </section> 
    
  
</body>
</html>