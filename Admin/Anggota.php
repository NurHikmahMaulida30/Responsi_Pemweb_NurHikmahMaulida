<?php
require("../server.php");
$data = show("SELECT * FROM anggota");
if (isset($_GET["delete_Anggota"])) {
    if (delete_Anggota($_GET > 0)) {
        echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'Anggota.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal dihapus');
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
            <h1><a href="../Index.html">Anggota Koperasi</a> </h1>
            <ul>
                <li><a href="../Home_Admin.php">Dasboard Admin</a> </li> 
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
            <form action="insert_Anggota.php">
        <button class="button">Insert Anggota</button>
    </form>
    <table class="styled-table" border="1">
        <tr class="active-row">
            <td>IdAnggota</td>
            <td>Nama_Anggota</td>
            <td>Alamat</td>
            <td>No_KTP</td>
            <td>Jenis_Kelamin</td>
            <td>No_Telpon</td>
            <td>Kelas</td>
            <td>Keterangan</td>
            <td>Aksi</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr >
                <td><?php echo $d["IdAnggota"]; ?></td>
                <td><?php echo $d["Nama_Anggota"]; ?></td>
                <td><?php echo $d["Alamat"]; ?></td>
                <td><?php echo $d["No_KTP"]; ?></td>
                <td><?php echo $d["Jenis_Kelamin"]; ?></td>
                <td><?php echo $d["No_Telpon"]; ?></td>
                <td><?php echo $d["Kelas"]; ?></td>
                <td><?php echo $d["Keterangan"]; ?></td>
               
                <td>
                    <form action="" method="GET">
                        <button class="button" type="submit" name="delete_Anggota" value=<?php echo $d["IdAnggota"]; ?>>DELETE</button>
                    </form>
                    <form action="update_Anggota.php" method="GET">
                        <button class="button" type="submit" name="update" value=<?php echo $d["IdAnggota"]; ?>>UPDATE</button>
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
    
    
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>
                <div class="col-1">
                    <h4>Email</h4>
                    <p>nurhikmahmaulid30@gmail.com</p>
                </div>

                <div class="col-1">
                    <h4>Instagram</h4>
                    <p>@nurhikmahmaulida30</p>
                </div>

                <div class="col-1">
                    <h4>Telp/Hp</h4>
                    <p>+62 8315 0506 569</p>
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