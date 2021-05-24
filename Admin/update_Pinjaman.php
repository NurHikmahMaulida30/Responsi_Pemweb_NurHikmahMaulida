<?php
require("../server.php");
$No_Pinjaman = $_GET["UpPinjaman"];
$data = show("SELECT * FROM pinjaman WHERE No_Pinjaman = '$No_Pinjaman'");
if (isset($_POST["UpPinjaman"])) {
    if (UpPinjaman($_GET > 0)) {
        echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'Pinjaman.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diupdate');
            document.location.href = 'Pinjaman.php';
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
            <h1><a href="../Index.html">Pinjaman Koperasi</a> </h1>
            <ul>
                <li><a href="Pinjaman.php"> Kembali</a></li>
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
                    <label for="No_Pinjaman">No_Pinjaman</label>
                    <input type="text" class="form-control" name="No_Pinjaman" id="No_Pinjaman" value=<?php echo $d["No_Pinjaman"]; ?> readonly>
                </li>
                <li>
                    <label for="IdAnggota">IdAnggota</label>
                    <input type="text" class="form-control" name="IdAnggota" id="IdAnggota" value=<?php echo $d["IdAnggota"]; ?> >
                </li>
               
                <li>
                    <label for="Tanggal_Pinjaman">Tanggal_Pinjaman</label>
                    <input type="date" class="form-control" name="Tanggal_Pinjaman" id="Tanggal_Pinjaman" value=<?php echo $d["Tanggal_Pinjaman"]; ?> >
                    
                </li>
                <li>
                    <label for="JML_Pinjaman">JML_Pinjaman</label>
                    <input type="number" class="form-control" name="JML_Pinjaman" id="JML_Pinjaman" value=<?php echo $d["JML_Pinjaman"]; ?>>
                </li>
                <li>
                    <label for="Keperluan">Keperluan</label>
                    <input type="text" class="form-control" name="Keperluan" id="Keperluan" value=<?php echo $d["Keperluan"]; ?>>
                </li>
                
                    <button class="button" type="submit" name=" UpPinjaman">update</button>
               
            </ul>
        <?php
        }
        ?>
    </form> 
    
    </div>
    </section> 
    
  
</body>
</html>