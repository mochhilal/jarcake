<?php
include ('connect.php');
$nama = $_POST['nama'];
$mail = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$cekuser= mysql_query("SELECT * FROM datapembeli WHERE username = '$user'");
if (mysql_num_rows($cekuser) <> 0 ) {
  echo 'Username Sudah Terdaftar! <br />
  echo '<a href="login.php">$laquo; Back</a>';
} else {
  if ( !$nama || !$mail || !$user || !$pass ) {
    echo 'Masih ada dta yang kosong!<br />';
    echo '<a href="login.php">$laquo; Back</a>';
  } else {
    $simpan = mysql_query("INSERT INTO datapembeli VALUES ('','$nama','$mail','$user','$pass')");
    if ($simpan) {
      echo 'Pendaftaran Berhasil, Silahkan <a href="login.php">Login</a>';
    } else {
      echo 'Proses Gagal!';
    }
  }
}
?>
