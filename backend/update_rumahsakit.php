<?php 
include 'connect.php';
$id = $_POST['id'];
$profil_rs = $_POST['profil_rs'];
$no_tlpn_rs = $_POST['no_tlpn_rs'];
$alamat = $_POST['alamat'];
$link_gmaps = $_POST['link_gmaps'];
$jumlah_ambulan = $_POST['jumlah_ambulan'];
$lat = $_POST['latitude'];
$long = $_POST['longtitude'];

$sql = "UPDATE rumah_sakit set profil_rs='$profil_rs', no_tlpn_rs='$no_tlpn_rs', alamat='$alamat', link_gmaps='$link_gmaps', jumlah_ambulan='$jumlah_ambulan', lat = '$lat', lon='$long' where id='$id'";
 

if(mysqli_query($koneksi, $sql)){
    	echo "<script> 
	            alert('Update berhasil!');
	            document.location.href = '../admin/detail_admin.php';
	        </script>
	    ";
}else{
    print("gagal");
}
 
?>
