<?php
require("../server.php");
$data = show("SELECT * FROM pinjaman");
if (isset($_GET["delete_Pinjaman"])) {
    if (delete_Pinjaman($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Pinjaman.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
            document.location.href = 'Pinjaman.php';
        </script>";
    }
}

?>
<?php 
	session_start();
    $_SESSION['Jml_Pinjaman']=['Jml_Pinjaman'];
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
    <?php
    
    ?>
    
    <header>
        <div class="container">
            <h1><a href="../Index.html">Pinjaman Koperasi</a> </h1>
            <ul>
                <li><a href="../Home_admin.php">Dasboard Admin</a> </li> 
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
            <form action="insert_Pinjaman.php">
        <button class="button">Insert Pinjaman</button>
    </form>
    <table class="styled-table" border="1">
        <tr class="active-row">
            <td>No_Pinjaman</td>
            <td>IdAnggota</td>
            <td>Tanggal_Pinjaman</td>
            <td>JML_Pinjaman</td>
            <td>Keperluan</td>
            <td>Aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr >
                <td><?php echo $d["No_Pinjaman"]; ?></td>
                <td><?php echo $d["IdAnggota"]; ?></td>
                <td><?php echo $d["Tanggal_Pinjaman"]; ?></td>
                <td><?php echo $d["JML_Pinjaman"]; ?></td>
                <td><?php echo $d["Keperluan"]; ?></td>
                
                <td>
                    <form action="" method="GET">
                        <button class="button" type="submit" name="delete_Pinjaman" value=<?php echo $d["No_Pinjaman"]; ?>>DELETE</button>
                    </form>
                    <form action="update_Pinjaman.php" method="GET">
                        <button class="button" type="submit" name="UpPinjaman" value=<?php echo $d["No_Pinjaman"]; ?>>UPDATE</button>
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