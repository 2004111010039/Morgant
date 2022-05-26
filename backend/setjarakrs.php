<?php
include "connect.php";
session_start();

function getDistanceBetweenPoints($lat1, $lon1, $lat2, $lon2) {
    $theta = $lon1 - $lon2;
    $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $miles = $miles * 60 * 1.1515;
    $kilometers = $miles * 1.609344;
    return $kilometers; 
}


 	$query = mysqli_query($koneksi, "SELECT * FROM rumah_sakit");
  while ($data = mysqli_fetch_array($query)){
$lat = doubleval($_POST['lat']);
$lon = doubleval($_POST['lon']);
$point1 = array("lat" => $lat, "long" => $lon);
$point2 = array("lat" => $data['lat'], "long" => $data['lon'] );
$distance = getDistanceBetweenPoints($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);
$distance2 = round(doubleval($distance), 2);
$id = $data['id'];
mysqli_query($koneksi, "UPDATE rumah_sakit set jarak = '$distance2' where id='$id'");
header("Location:../index.php");
$_SESSION['stopclick'] = "stop";
}

?>