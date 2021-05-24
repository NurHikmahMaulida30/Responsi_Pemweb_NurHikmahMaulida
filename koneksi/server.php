<?php 
$servername = "localhost";
$database = "sistem_koperasi";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function insert_Anggota($data){
    global $conn;
    $IdAnggota = $_POST["IdAnggota"];
    $Nama_Anggota = $_POST["Nama_Anggota"];
    $Alamat = $_POST["Alamat"];
    $No_KTP = $_POST["No_KTP"];
    $Jenis_Kelamin = $_POST["Jenis_Kelamin"];
    $No_Telpon = $_POST["No_Telpon"];
    $Kelas = $_POST["Kelas"];
    $Keterangan = $_POST["Keterangan"];

    mysqli_query($conn,"call insert_Anggota('$IdAnggota','$Nama_Anggota','$Alamat ','$No_KTP','$Jenis_Kelamin','$No_Telpon','$Kelas','$Keterangan ' )" );
    return mysqli_affected_rows($conn);
}

function insert_Simpanan($data){
    global $conn;
    $No_Simpanan = $_POST["No_Simpanan"];
    $IdAnggota = $_POST["IdAnggota"];
    $tanggal_simpanan = $_POST["tanggal_simpanan"];
    $Jumlah_simpanan = $_POST["Jumlah_simpanan"];

    mysqli_query($conn,"call insert_Simpanan('$No_Simpanan',' $IdAnggota ','$tanggal_simpanan ','$Jumlah_simpanan' )" );
    return mysqli_affected_rows($conn);
}

function insert_Pinjaman($data){
    global $conn;
    $No_Pinjaman = $_POST["No_Pinjaman"];
    $IdAnggota = $_POST["IdAnggota"];
    $Tanggal_Pinjaman = $_POST["Tanggal_Pinjaman"];
    $JML_Pinjaman = $_POST["JML_Pinjaman"];
    $Keperluan = $_POST["Keperluan"];

    mysqli_query($conn,"call insert_Pinjaman('$No_Pinjaman',' $IdAnggota ','$Tanggal_Pinjaman ','$JML_Pinjaman','$Keperluan' )" );
    return mysqli_affected_rows($conn);
}

function delete_Anggota($data){
    global $conn;
    $IdAnggota = $_GET["delete_Anggota"];
    mysqli_query($conn, "call deleteT_Anggota('$IdAnggota ')");
    return mysqli_affected_rows($conn);
}

function delete_Pinjaman($data){
    global $conn;
    $No_Pinjaman = $_GET["delete_Pinjaman"];
    mysqli_query($conn, "call deleteT_Pinjaman('$No_Pinjaman ')");
    return mysqli_affected_rows($conn);
}

function delete_Simpanan($data){
    global $conn;
    $No_Simpanan = $_GET["delete_Simpanan"];
    mysqli_query($conn, "call deleteT_Simpanan('$No_Simpanan')");
    return mysqli_affected_rows($conn);
}

function delete_sph($data){
    global $conn;
    $No_SPH = $_GET["delete_sph"];
    mysqli_query($conn, "call deleteT_sph('$No_SPH')");
    return mysqli_affected_rows($conn);
}

function UpAnggota($data){
    global $conn;
    $IdAnggota = $_POST["IdAnggota"];
    $Nama_Anggota = $_POST["Nama_Anggota"];
    $Alamat = $_POST["Alamat"];
    $No_KTP = $_POST["No_KTP"];
    $Jenis_Kelamin = $_POST["Jenis_Kelamin"];
    $No_Telpon = $_POST["No_Telpon"];
    $Kelas = $_POST["Kelas"];
    $Keterangan = $_POST["Keterangan"];
    mysqli_query($conn, "call Update_Anggota('$IdAnggota','$Nama_Anggota',' $Alamat','$No_KTP','$Jenis_Kelamin','$No_Telpon','$Kelas ','$Keterangan')");
    return mysqli_affected_rows($conn);
}

function UpPinjaman($data){
    global $conn;
    $No_Pinjaman = $_POST["No_Pinjaman"];
    $IdAnggota = $_POST["IdAnggota"];
    $Tanggal_Pinjaman = $_POST["Tanggal_Pinjaman"];
    $JML_Pinjaman = $_POST["JML_Pinjaman"];
    $Keperluan = $_POST["Keperluan"];
    mysqli_query($conn, "call Update_Pinjaman('$No_Pinjaman','$IdAnggota',' $Tanggal_Pinjaman','$JML_Pinjaman','$Keperluan')");
    return mysqli_affected_rows($conn);
}

function UpdateSimpanan($data){
    global $conn;
    $No_Simpanan = $_POST["No_Simpanan"];
    $IdAnggota = $_POST["IdAnggota"];
    $tanggal_simpanan = $_POST["tanggal_simpanan"];
    $Jumlah_simpanan = $_POST["Jumlah_simpanan"];
    mysqli_query($conn, "call Update_Simpanan('$No_Simpanan','$IdAnggota',' $tanggal_simpanan','$Jumlah_simpanan')");
    return mysqli_affected_rows($conn);
}

function UpdateSph($data){
    global $conn;
    $No_SPH= $_POST["No_SPH"];
    $No_Pinjaman= $_POST["No_Pinjaman"];
    $No_KTP = $_POST["No_KTP"];
    $Tgl_SPH = $_POST["Tgl_SPH"];
    $Jml_Cair = $_POST["Jml_Cair"];
    $Bunga = $_POST["Bunga"];
    $Jangka_Waktu = $_POST["Jangka_Waktu"];
    $Tgl_Lunas = $_POST["Tgl_Lunas"];
    $No_Rek = $_POST["No_Rek"];
    mysqli_query($conn,"call Update_sph('$No_SPH','$No_Pinjaman','$No_KTP ','$Tgl_SPH','$Jml_Cair','$Bunga','$Jangka_Waktu','$Tgl_Lunas','$No_Rek' )" );
    return mysqli_affected_rows($conn);
}

function Input_regis($data){
    global $conn;
    $id = $_POST["id"];
    $username = $_POST["username"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    mysqli_query($conn,"call inputan_Registrasi('$id',' $username','$nama_lengkap ','$password','$level')" );
    return mysqli_affected_rows($conn);
}
function inputan_sph($data){
    global $conn;
    $No_SPH= $_POST["No_SPH"];
    $No_Pinjaman= $_POST["No_Pinjaman"];
    $No_KTP = $_POST["No_KTP"];
    $Tgl_SPH = $_POST["Tgl_SPH"];
    $Jml_Cair = $_POST["Jml_Cair"];
    $Bunga = $_POST["Bunga"];
    $Jangka_Waktu = $_POST["Jangka_Waktu"];
    $Tgl_Lunas = $_POST["Tgl_Lunas"];
    $No_Rek = $_POST["No_Rek"];
    mysqli_query($conn,"call input_SPH('$No_SPH',' $No_Pinjaman','$No_KTP ','$Tgl_SPH','$Jml_Cair',' $Bunga','$Jangka_Waktu','$Tgl_Lunas','$No_Rek' )" );
    return mysqli_affected_rows($conn);
}
function inputan_angsuran($data){
    global $conn;
    $Id_Angsuran= $_POST["Id_Angsuran"];
    $No_SPH= $_POST["No_SPH"];
    $Tgl_Angsuran= $_POST["Tgl_Angsuran"];
    $Jml_Angsuran  = $_POST["Jml_Angsuran"];
    $No_Rek = $_POST["No_Rek"];
   
    mysqli_query($conn,"call inputan_angsuran('$Id_Angsuran',' $No_SPH','$Tgl_Angsuran ','$Jml_Angsuran','$No_Rek')" );
    return mysqli_affected_rows($conn);
}
