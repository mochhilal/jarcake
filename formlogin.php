<?php
session_start();
include('connect.php;);
$user = $_POST ['username'];
$pass = $_POST ['password'];
$cekuser = mysql_query("SELECT *FROM datapembeli WHERE username = '$user'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if ($jumlah == 0 ) {
  echo 'Username Belum Terdaftar!<br/>';
  echo '<a href="login.php">&laquo; Back</a>';
  } else {
  if ( $pass <> $hasil['password'] ) {
  echo 'Password Salah!<br/>';
   echo '<a href="login.php">&laquo; Back</a>';
    } else {
        $_SESSION['username'] = $user;
        header('location:pembelian.php');
    }
}
?>
