<?php 
session_start(); 
include "connect.php";

$nama_rs = $_POST['nama_rs'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * from rumah_sakit where nama_rs='$nama_rs' and password='$password'");

$data = mysqli_fetch_array($query);

$ids = $data['id'];

$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['id'] = $ids;
    $_SESSION['status'] = "login";
    unset($_SESSION['stopclick']);
    header("location:../admin/detail_admin.php");
}else{
    header("location:../admin/logina.php?pesan=User atau Pass Salah!");
}

?>
