<?php

include "connect.php";

$id=$_POST['id'];
$c_image= $_FILES['gambar']['name'];
$c_image_temp=$_FILES['gambar']['tmp_name'];

$query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit WHERE id = $id");
$data = mysqli_fetch_array($query);
$namaimg = $data['namaimg'];
$target = "../img/rsimg/$namaimg";

if($data['namaimg'] != "rsdefault.jpg"){
	if(file_exists($target)){
	unlink($target);
}}

move_uploaded_file($c_image_temp , "../img/rsimg/$c_image");

    $c_update="UPDATE rumah_sakit set namaimg = '$c_image' where id='$id'";

    $run_update=mysqli_query($koneksi, $c_update);

    if($run_update){
	echo "<script> 
	            alert('Upload profil berhasil!');
	            document.location.href = '../admin/upload_profile.php';
	        </script>
	    ";
    }
  
?>