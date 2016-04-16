<?php
	require_once("connect.php");
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pass = $_POST['password'];	
	$query = $db->prepare("SELECT * FROM datapembeli WHERE email = ?");
	$query->execute(array($email));	
	if($query->rowCount() != 0) {
		echo "<div align='center'>Email Sudah Terdaftar! <a href='login.php'>Back</a></div>";
	} else {
		if(!$nama || !$email || !$username || !$pass) {
			echo "<div align='center'>Masih ada data yang kosong! <a href='login.php'>Back</a>";
		} else {			
			$sql = $db->prepare("INSERT INTO datapembeli (nama, email, username, password) VALUES (?, ?, ?, ?)");
			$simpan = $sql->execute(array($nama, $email, $username, $pass));
			if($simpan) {
				echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
			} else {
				echo "<div align='center'>Proses Gagal!</div>";
			}
		}
	}
?>
