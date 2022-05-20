<?php 
include 'connect.php';
$id = $_POST['id'];
$username = $_POST['username'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$no_tlpn = $_POST['no_tlpn'];
$email = $_POST['email'];
 
$sql = "UPDATE akun_user set username='$username', ttl='$ttl', alamat='$alamat', jenis_kelamin='$jenis_kelamin', kewarganegaraan='$kewarganegaraan', no_tlpn='$no_tlpn', email='$email' where id='$id'";
 

if(mysqli_query($koneksi, $sql)){
    	echo "<script> 
	            alert('Update berhasil!');
	            document.location.href = '../user/detail_user.php';
	        </script>
	    ";
}else{
    print("gagal");
}
 
?>