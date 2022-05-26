<?php 
session_start();

include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * from akun_user where username='$username' and password='$password'");

$data = mysqli_fetch_array($query);

$ids = $data['id'];

$cek = mysqli_num_rows($query);

if($cek > 0){
	$_SESSION['id'] = $ids;
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:../user/login.php?pesan=User atau Pass Salah!");
}

?>
