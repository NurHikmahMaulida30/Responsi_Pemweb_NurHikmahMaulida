<?php
require("../server.php");
$data = show("SELECT * FROM sph");
if (isset($_GET["delete_sph"])) {
    if (delete_sph($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Data_SPH.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
    <title>NUR HIKMAH MAULIDA</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 

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
                <li><a href="../Home_Admin.php">Dasboard Admin</a> </li> 
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
            <form action="insert_sph.php">
        <button class="button">Insert SPH </button>
    </form>
    <table class="styled-table" border="1">
        <tr class="active-row">
            <td>No_SPH</td>
            <td>No_Pinjaman</td>
            <td>No_KTP</td>
            <td>Tgl_SPH</td>
            <td>Jml_Cair</td>
            <td>Bunga %</td>
            <td>Jangka_Waktu</td>
            <td>Tgl_Lunas</td>
            <td>No.Rekening Bank</td>
            <td>Aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr >
                <td><?php echo $d["No_SPH"]; ?></td>
                <td><?php echo $d["No_Pinjaman"]; ?></td>
                <td><?php echo $d["No_KTP"]; ?></td>
                <td><?php echo $d["Tgl_SPH"]; ?></td>
                <td><?php echo $d["Jml_Cair"]; ?></td>
                <td><?php echo $d["Bunga"]; ?></td>
                <td><?php echo $d["Jangka_Waktu"]; ?></td>
                <td><?php echo $d["Tgl_Lunas"]; ?></td>
                <td><?php echo $d["No_Rek"]; ?></td>
               
                <td>
                    <form action="" method="GET">
                        <button class="button" type="submit" name="delete_sph" value=<?php echo $d["No_SPH"]; ?>>DELETE</button>
                    </form>
                    <form action="update_sph.php" method="GET">
                        <button class="button" type="submit" name="UpdateSph" value=<?php echo $d["No_SPH"]; ?>>UPDATE</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
 
            </div>
        </div>
    </section> 
    
  <footer>
    <div class="container">
        <small>Copyrigh &copy; 2021 -Nur Hikmah Maulida. All Right Reserve.</small>
    </div>
  </footer>

</body>
</html>