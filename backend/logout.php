<?php 
 
session_start();
session_destroy();
unset($_SESSION['stopclick']);
 
header("Location: ../index.php");
 
?>