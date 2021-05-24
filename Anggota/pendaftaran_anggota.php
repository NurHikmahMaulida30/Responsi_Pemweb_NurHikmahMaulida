<?php
require("../server.php");
if (isset($_POST["insert_Anggota"])) {
    if (insert_Anggota($_POST > 0)) {
        echo "<script>
            alert('Selamat anda telah menjadi anggota koperasi simpan pinjam');
            document.location.href = '../Home_anggota.php';
        </script>";
    } else {
        echo "<script>
            alert('Maaf data anda gagal ditambah, Silahkan coba isi kembali');
            document.location.href = '../Home_anggota.php';
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
            <h1><a href="Index.html">Pendaftaran Anggota Koperasi</a> </h1>
            <ul>
                <li><a href="../Home_anggota.php"> Home Anggota</a></li>
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
    <form action="" method="POST">
        <ul>
        <div class="form-group col-md-10">
             <li>
                <label for="IdAnggota">IdAnggota</label> 
                <input type="text" class="form-control" name="IdAnggota" id="IdAnggota">  
                </li> 
           
            <li>
                <label for="Nama_Anggota">Nama_Anggota</label> 
                <input type="text" class="form-control" name="Nama_Anggota" id="Nama_Anggota">
            </li>
            <li>
                <label for="Alamat">Alamat</label> 
                <input type="text" class="form-control" name="Alamat" id="Alamat"> 
            </li>
            <li>
                <label for="No_KTP">No_KTP</label> <br>
                <input type="text" class="form-control" name="No_KTP" id="No_KTP">
            </li>
            <li>
                <label for="Jenis_Kelamin">Jenis_Kelamin</label>
                <input type="text" class="form-control" name="Jenis_Kelamin" id="Jenis_Kelamin"> 
            </li>
            <li>
                <label for="No_Telpon">No_Telpon</label> 
                <input type="text" class="form-control" name="No_Telpon" id="No_Telpon"> 
            </li>
            <li>
                <label for="Kelas">Kelas</label> <br>
                <input type="text" class="form-control" name="Kelas" id="Kelas"> 
            </li>
            <li>
                <label for="Keterangan">Keterangan</label>
                <input type="text" class="form-control" name="Keterangan" id="Keterangan">
            </li>
            </div>
            <br>
                <button class="button" type="submit" name="insert_Anggota">insert</button>

        </ul>
    </form>


        </div>
    </section> 
    
    
    
  
</body>
</html>