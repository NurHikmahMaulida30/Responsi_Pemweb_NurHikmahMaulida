<?php
require("server.php");
$data = show("SELECT * FROM anggota ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/09e0aee41b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Open+Sans:wght@300&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_anggota.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Dashboard</title>
</head>

<body>
<?php 
	session_start();
    $_SESSION['Jml_Pinjaman']=['Jml_Pinjaman'];
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.html?pesan=gagal");
	}
 
	?>

<div class="d-flex" id="wrapper">
        <div id="sidebar-wrapper">
            <?php
                include("sidebar_anggota.php");
            ?>
        </div>
        <div id="page-content-wrapper">
            <?php include("header_anggota.php"); ?>
            <div class="container-fluid px-4">          
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="container">
            <div class="jumbotron">
            <h2 class="display-4">Selamat datang , <?php echo $_SESSION['nama_lengkap']; ?></h2>
            <p class="lead">Anda telah berkunjung di sebuah website <b>Sistem Koperasi Simpan Pinjam.</b> </p>
            <p >Website ini mempermudah anda dalam melakukan sebuah simpanan  uang atau mengajukan pinjaman sejumlah uang. </p>
            <p>pinjaman , <?php echo $_SESSION['Jml_Pinjaman']; ?></p>
        
            

           
            </div>
    </div>

    <script src="script.js"></script>

</body>
</html>