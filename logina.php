<?php include "../backend/connect.php";
session_start();
if(isset($_SESSION['status'])){ 
if($_SESSION['status'] == 'login'){ 
    header("Location:../index.php");}}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Morgant</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="icon" href="../img/logo.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="login">
  			<div class="login-triangle"></div>
 		 	<h2 class="login-header">Log in Rumah Sakit</h2>
	  		<form action="../backend/action_login_adm.php" method="POST" class="login-container">
	    		<p><input type="text" placeholder="Nama Rumah Sakit" name="nama_rs" required></p>
	    		<p><input type="password" placeholder="Password" name="password" required></p>
	    		<p><input type="submit" name="submit" value="Log in"></p>
	    		<center>
                    <div class="gagal-login">
                        <?php if(isset($_GET['pesan'])){ 
                            $pesan = $_GET['pesan']; ?>
                            <i><?= $pesan ?></i>
                        <?php } ?>
                    </div>
                    <a class="btn btn-link p-0" href="../user/registeru.php">Sign Up</a> / <a class="btn btn-link p-0" href="../user/login.php">Login sebagai user</a> / <a class="btn btn-link p-0" href="../index.php">Kembali</a>
                </center>
	  		</form>
		</div>
    </body>
</html>
