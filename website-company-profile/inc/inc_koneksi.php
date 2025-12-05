<?php
$host = "localhost";
$user = "root";
$pass = "deniadenadanendra19"; 
$db   = "companyprofile";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi){
    die("Gagal terkoneksi: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>