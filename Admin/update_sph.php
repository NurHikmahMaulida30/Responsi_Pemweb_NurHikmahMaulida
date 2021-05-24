<?php
require("../server.php");
$No_SPH = $_GET["UpdateSph"];
$data = show("SELECT * FROM sph WHERE No_SPH = '$No_SPH'");
if (isset($_POST["UpdateSph"])) {
    if (UpdateSph($_GET > 0)) {
        echo "<script>
            alert('data berhasil diupdate');
            document.location.href = 'Data_SPH.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal diupdate');
            document.location.href = 'Data_SPH.php';
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
    <title>update SPH</title>
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
                <li><a href="Data_SPH.php">kembali</a> </li> 
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
                    <label for="No_SPH">No_SPH</label>
                    <input type="text" class="form-control" name="No_SPH" id="No_SPH" value=<?php echo $d["No_SPH"]; ?> readonly>
                </li>
                <li>
                    <label for="No_Pinjaman">No_Pinjaman</label>
                    <input type="text" class="form-control" name="No_Pinjaman" id="No_Pinjaman" value=<?php echo $d["No_Pinjaman"]; ?> readonly>
                </li>
                <li>
                    <label for="No_KTP">No_KTP</label>
                    <input type="text" class="form-control" name="No_KTP" id="No_KTP" value=<?php echo $d["No_KTP"]; ?> >    
                </li>
                
                <li>
                    <label for="Tgl_SPH">Tgl_SPH</label>
                    <input type="date" class="form-control" name="Tgl_SPH" id="Tgl_SPH" value=<?php echo $d["Tgl_SPH"]; ?>>
                </li>
                <li>
                    <label for="Jml_Cair">Jml_Cair</label>
                    <input type="text" class="form-control" name="Jml_Cair" id="Jml_Cair" value=<?php echo $d["Jml_Cair"]; ?>>
                </li>
                <li>
                    <label for="Bunga">Bunga</label>
                    <input type="text" class="form-control" name="Bunga" id="Bunga" value=<?php echo $d["Bunga"]; ?>>
                </li>
                <li>
                    <label for="Jangka_Waktu">Jangka_Waktu</label>
                    <input type="text" class="form-control" name="Jangka_Waktu" id="Jangka_Waktu" value=<?php echo $d["Jangka_Waktu"]; ?>>
                </li>
                <li>
                    <label for="Tgl_Lunas">Tgl_Lunas</label>
                    <input type="date" class="form-control" name="Tgl_Lunas" id="Tgl_Lunas" value=<?php echo $d["Tgl_Lunas"]; ?>>
                </li>
                <li>
                    <label for="No_Rek">No.Rekening Bank </label>
                    <input type="number" class="form-control" name="No_Rek" id="No_Rek" value=<?php echo $d["No_Rek"]; ?>>
                </li>

               
                <br>
                    <button class="button" type="submit" name="UpdateSph">update</button>
               
            </ul>
        <?php
        }
        ?>
    </form> 
    
    </div>
    </section> 
    
  
</body>
</html>