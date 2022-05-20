<?php 
include 'connect.php';
$id = $_POST['id'];
$sandi_lama = $_POST['sandi_lama'];
$sandi_baru = $_POST['sandi_baru'];
$sandi_baru_konfir = $_POST['sandi_baru_konfir'];

$query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE id = $id");
$data = mysqli_fetch_array($query);

if($sandi_lama == $data['password']){
		if($sandi_baru == $sandi_baru_konfir){
			$sql = "UPDATE rumah_sakit set password='$sandi_baru' where id='$id'";
			mysqli_query($koneksi, $sql);
			echo "<script> 
	            	alert('Update sandi berhasil!');
	            	document.location.href = '../admin/rubah_sandi.php';
	        		</script>
	    			";
		} else {
			header("location:../admin/rubah_sandi.php?pesan=Sandi baru dan konfirmasi sandi tidak sama!");
	}} else {
header("location:../admin/rubah_sandi.php?pesan=Sandi lama salah!");	
} 
?>