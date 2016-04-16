<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname   = "jarcake";
  $db       = new PDO ('mysql:dbname='.$dbname.';host='.$hostname, $username, $password);
?>
