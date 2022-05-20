<?php 
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


$query = mysqli_query($koneksi, "SELECT * FROM akun_user");
$data = mysqli_fetch_array($query);

if ($username != $data['username']) {
	if ($password == $password2) {
		$sql="INSERT into akun_user (username,password) values
		('$username', '$password')";
  		$hasil=mysqli_query($koneksi,$sql);

  		header("Location:../user/login.php");
	} else {
		header("Location:../user/registeru.php?pesan=Password tidak sama!");
}} else {
	header("Location:../user/registeru.php?pesan=username sudah ada!");
}


?>
