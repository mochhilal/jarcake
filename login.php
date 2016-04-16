<?php
	session_start();
	if(isset($_SESSION['email'])) {
	header('location:index.php'); }
	require_once("connect.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="anoceanofsky.css" />
    <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="page">
			<div class="topNaviagationLink"><a href="index.php">Beranda</a></div>
			<div class="topNaviagationLink"><a href="jarcake.php">Jar Cake</a></div>
			<div class="topNaviagationLink"><a href="pembelian.php">Pembelian</a></div>
	</div>		
	  <div id="wrapper">
		<div class="join">Mau Jar Cake nya >.< !!!</div>
		<div class="lock"></div>
		<div class="clr"></div>
		<div class="login-options">Silahkan Login disini.</div>
		<div class="forms">
		  <form action="formlogin.php" method="post">
		    <input name="email" type="email" placeholder="Masukkan email anda..." size="70" onClick="border: 1px solid #30a8da;"/>
				<input name="password" type="password" placeholder="Masukkan password..." size="70" onClick="border: 1px solid #30a8da;"/>
				<input class="create-acc" name="submit" type="submit" value="Masuk"/>
			</form>
		</div>
		<div class="clr"><hr /></div>
		<div class="login-options">Jika belum daftar, Silahkan pilih salah satu cara untuk mendaftar dibawah ini.</div>
		<a class="twitter" href="#">Twitter</a>
		<a class="facebook" href="#">Facebook</a>
		<a class="google" href="google/login.php">Google+</a>
		<div class="clr"><hr /></div>
		<div class="mail-text">Atau daftar menggunakan alamat email anda.</div>
		<div class="forms">
		  <form action="formregistrasi.php" method="post">
				<input name="nama" type="text" placeholder="Masukkan nama anda..." size="70" onClick="border: 1px solid #30a8da;"/>
				<input name="email" type="email" placeholder="Masukkan email anda..." size="70" onClick="border: 1px solid #30a8da;"/>
				<input name="username" type="text" placeholder="Masukkan username anda..." size="70" onClick="border: 1px solid #30a8da;"/>
				<input name="password" type="password" placeholder="Masukkan password..." size="70" onClick="border: 1px solid #30a8da;"/>
				<input class="create-acc" name="submit" type="submit" value="Daftar"/>
			</form>
		</div>
	</div>
</body>
</html>
			
