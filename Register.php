<?php
require("server.php");

if (isset($_POST["Input_regis"])) {
    if (Input_regis($_POST > 0)) {
        echo "<script>
            alert('Selamat Anda Berhasil Regis');
            document.location.href = 'Register.php';
        </script>";
    } else {
        echo "<script>
            alert('data anda gagal ditambah');
            document.location.href = 'Register.php';
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
            <h1><a href="Index.html">Register</a> </h1>
            <ul>
                <li><a href="Index.html">Home</a> </li> 
                <li><a href="#contact">Contact</a> </li>
                <li><a href="login.php">Back</a> </li> 
                
            </ul>

        </div>
    </header>
    
    <section id="Visi">
        <div class="container">     
    <form action="" method="POST">
        <ul>
        <div class="form-group col-md-10">
            <li>
                <label for="id">id</label>
                <input type="number" class="form-control"  name="id" id="id">
            </li>
            <li>
                <label for="username">username</label>
                <input type="text" class="form-control"  name="username" id="username">
            </li>
            <li>
                <label for="nama_lengkap">nama_lengkap</label>
                <input type="text" class="form-control"  name="nama_lengkap" id="nama_lengkap">
            </li>
            <li>
                <label for="password">password</label>
                <input type="text" class="form-control"  name="password" id="password" >
            </li>
            <li>
                <label for="level">level</label>
                <input type="text" class="form-control"  name="level" id="level" value="Anggota" readonly>
            </li>
        </div>
            <br>
                <button class="button" type="submit" name="Input_regis">insert</button>
        </ul>
    </form>


        </div>
    </section> 
    
 
</body>
</html>