<?php
require("../server.php");
$data = show("SELECT * FROM angsuran");


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
            <h1><a href="../Index.html">Angsuran Pinjaman</a> </h1>
            <ul>
                <li><a href="../Home_admin.php">Dasboard Admin</a></li>
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
           
    <table class="styled-table" border="1">
        <tr class="active-row">
            <td>No_Angsuran</td>
            <td>IdAnggota</td>
            <td>Tanggal_Pinjaman</td>
            <td>JML_Pinjaman_OLD</td>
            <td>JML_Pinjaman_New</td>
            <td>Keperluan</td>
        </tr>
        <?php
        foreach ($data as $d) {
        ?>
            <tr >
                <td><?php echo $d["No_Angsuran"]; ?></td>
                <td><?php echo $d["IdAnggota"]; ?></td>
                <td><?php echo $d["Tanggal_Pinjaman"]; ?></td>
                <td><?php echo $d["JML_Pinjaman_OLD"]; ?></td>
                <td><?php echo $d["JML_Pinjaman_New"]; ?></td>
                <td><?php echo $d["Keperluan"]; ?></td>
                
                
            </tr>
        <?php
        }
        ?>
    </table>
 
            </div>
        </div>
    </section> 
    
  
</body>
</html>