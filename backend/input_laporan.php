<?php 
include "connect.php";

$nama_rumahsakit = $_POST['nama_rumahsakit'];
$laporan = $_POST['laporan'];
$nama_user = $_POST['nama_user'];
$idrs = $_POST['idrs'];
$link = $_POST['link'];


$sql="INSERT into $nama_rumahsakit (id, nama_pelapor, laporan, link) values
('', '$nama_user', '$laporan', '$link')";


if (mysqli_query($koneksi,$sql)) {
	$sqlupdate = "UPDATE rumah_sakit SET jumlah_ambulan = jumlah_ambulan-1 WHERE id=$idrs";
	mysqli_query($koneksi, $sqlupdate);
	
	echo "<script> 
	            alert('Laporan berhasil!');
	            document.location.href = '../index.php';
	        </script>
	    ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>
