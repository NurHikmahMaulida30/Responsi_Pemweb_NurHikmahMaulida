<?php
require("server.php");

session_start();

$username = $_POST["username"];
$password = md5($_POST["password"]);
$level = $_POST["level"]; 


$get_user = show("SELECT * FROM tuser WHERE tuser.username = '$username' AND tuser.level = '$level'");

$user_valid = $get_user; 

//coba
//uji jika username sudah terdaftar
if ($user_valid ){
    //jika user terdaftar
    //cek sesuai atau tidak 
    if($password == $user_valid[0]['password']){
        //jika password sesuai
        //buat session
        $_SESSION['username'] = $user_valid[0]['username'];
        $_SESSION['nama_lengkap'] = $user_valid[0]['nama_lengkap'];
        $_SESSION['level'] = $user_valid[0]['level'];

        //uji level user
        if ($level == "Admin"){
            header('location:Home_admin.php');
        } elseif ($level == "Anggota"){
            header('location:Home_anggota.php');
        }
    }else {
        echo "<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');
        document.location='login.php'</script>";
    }

}else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');
    document.location='login.php'</script>";
}

?>