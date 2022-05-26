<?php 
include "connect.php";

$nama_rs = $_POST['nama-rs'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$profil = $_POST['profil-rs'];
$no_tlpn_rs = $_POST['no-tlpn-rs'];
$alamat = $_POST['alamat'];
$link_gmaps = $_POST['link-gmaps'];
$jumlah_ambulan = $_POST['jumlah-ambulan'];
$lat = $_POST['lat'];
$long = $_POST['long'];

$query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit");
$data = mysqli_fetch_array($query);

if ($nama_rs != $data['nama_rs']) {
	if ($password == $password2) {
		$sql="INSERT INTO rumah_sakit (id, nama_rs, password, profil_rs, no_tlpn_rs, alamat, link_gmaps, jumlah_ambulan, namaimg, ukuranimg, tipe, lat, lon, jarak) VALUES ('', '$nama_rs', '$password', '$profil', '$no_tlpn_rs', '$alamat', '$link_gmaps', '$jumlah_ambulan', 'rsdefault.jpg', '', '', '$lat', '$long', '')";

		$sql_table = "CREATE TABLE tlaporan (
					id INT(11) AUTO_INCREMENT PRIMARY KEY,
					nama_pelapor TEXT NOT NULL,
					laporan TEXT NOT NULL,
					link VARCHAR(150) NOT NULL
					)";	
					

		if (mysqli_query($koneksi, $sql_table)) {
  			echo "Table MyGuests created successfully";
		} else {
  		echo "Error creating table: " . mysqli_error($koneksi);
		}
	
		$new_nama = str_replace(' ', '', $nama_rs);
		$ubah = "ALTER TABLE tlaporan RENAME TO $new_nama";
		$hapus = "DROP TABLE tlaporan";

		$ubah_laporan=mysqli_query($koneksi,$ubah);
		$ubah_laporan=mysqli_query($koneksi,$hapus);
  		$hasil=mysqli_query($koneksi,$sql);
  		header("Location:../user/login.php");
	} else {
		header("Location:../admin/registera.php?pesan=Password tidak sama!");
}} else {
	header("Location:../admin/registera.php?pesan=Rumah sakit sudah ada!");
}


?>
