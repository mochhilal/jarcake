<?php
	session_start();
	require_once("connect.php");
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$query = $db->prepare("SELECT * FROM datapembeli WHERE email = ?");
	$query->execute(array($email));
	$hasil = $query->fetch();
	if($query->rowCount() == 0) {
		echo "<div align='center'>Email Belum Terdaftar! <a href='login.php'>Back</a></div>";
	} else {
		if($pass <> $hasil['password']) {
			echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
		} else {
			$_SESSION['email'] = $hasil['email'];
			header('location:pembelian.php');
		}
	}
?>
