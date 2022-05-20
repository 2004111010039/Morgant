<?php 
include "connect.php";
$ids = $_POST['ids'];
$id = $_POST['idlap'];
$nrs_normal = $_POST['nrs_normal'];

print($ids);
$deldata = mysqli_query($koneksi, "DELETE FROM $nrs_normal WHERE id='$id'");
if($deldata){
	$sqlupdate = "UPDATE rumah_sakit SET jumlah_ambulan = jumlah_ambulan+1 WHERE id=$ids";
	mysqli_query($koneksi, $sqlupdate);
	print("berhasil");
	header("Location:../admin/detail_admin.php");
}


 ?>