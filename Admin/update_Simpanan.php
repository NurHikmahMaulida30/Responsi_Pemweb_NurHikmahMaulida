<?php
require("../server.php");
$No_Simpanan = $_GET["UpdateSimpanan"];
$data = show("SELECT * FROM simpanan WHERE No_Simpanan = '$No_Simpanan'");
if (isset($_POST["UpdateSimpanan"])) {
    if (UpdateSimpanan($_GET > 0)) {
        echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'Simpanan.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diupdate');
            document.location.href = 'Simpanan.php';
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
                <li><a href="Simpanan.php">kembali</a> </li> 
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
                <li>
                    <label for="No_Simpanan">No_Simpanan</label>
                    <input type="text" class="form-control" name="No_Simpanan" id="No_Simpanan" value=<?php echo $d["No_Simpanan"]; ?> readonly>
                </li>
                <li>
                    <label for="IdAnggota">IdAnggota</label>
                    <input type="text" class="form-control" name="IdAnggota" id="IdAnggota" value=<?php echo $d["IdAnggota"]; ?> >
                </li>
                <li>
                    <label for="tanggal_simpanan">tanggal_simpanan</label>
                    <input type="text" class="form-control" name="tanggal_simpanan" id="tanggal_simpanan" value=<?php echo $d["tanggal_simpanan"]; ?> >
                    
                </li>
                <li>
                    <label for="Jumlah_simpanan">Jumlah_simpanan</label>
                    <input type="text" class="form-control" name="Jumlah_simpanan" id="Jumlah_simpanan" value=<?php echo $d["Jumlah_simpanan"]; ?>>
                </li>
            
                
                    <button class="button" type="submit" name=" UpdateSimpanan">update</button>
               
            </ul>
        <?php
        }
        ?>
    </form> 
    
    </div>
    </section> 
    
  
</body>
</html>