<?php
session_start();
if (empty($_SESSION['username']) ){
    header('location:login.php');
    }
else {
    $usr =$_SESSION['username'];
    }
include ('connect.php');
$query = mysql_query("SELECT * FROM datapembeli WHERE username ='$usr'");
$hasil = mysql_fetch_array($query);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="anoceanofsky.css"/>
<title>Jarcake</title>
</head>
<body>
   <div id="page1">
        <div class="topNaviagationLink"><a href="index.php">Beranda</a></div>
        <div class="topNaviagationLink"><a href="index.php">Jar Cake</a></div>
        <div class="topNaviagationLink"><a href="index.php">Pembelian</a></div>
        <div class="topNaviagationLink"><a href="index.php">Hubungi</a></div>
        <div class="topNaviagationLink"><a href="index.php">Logout</a></div>
    </div>
    <div id="mainPicture">
      <div class="picture">
      </div>
      <div class="contentBox">
      <div class+"innerBox">
           <div class="contentTitle">Input Data Pembelian</div>
           <div class="contentText"><p></p><br/>
           <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
       <form action="action_input.php" method="POST" enctype="multipart/form-data">
           <tr>
               <td height="40">&nbsp;</td>
               <td> ID Pembelian </td>
               <td><input type="text" name="id_pembelian" size="10"></td>
            </tr>
             <tr>
               <td height="40">&nbsp;</td>
               <td> ID User </td>
               <td><input type="text" name="id_user" size="10"></td>
            </tr>
             <tr>
               <td height="40">&nbsp;</td>
               <td> Jar Cake </td>
               <td>
               <select name="Jar Cake">
               <option value="">Silahkan Pilih</option>
               <option value="Oreo">Oreo</option>
               <option value="Revelvet">Redvelvet</option>
               <option value="Banana">Banana</option>
               <option value="Chococheese">Chococheese</option>
               <option value="Durian">Durian</option>
               <option value="Greentea">Greentea</option>
               <option value="Avocado">Avocado</option>
               <option value="Avomisu">Avomisu</option>
               <option value="Tiramisu">Tiramisu</option>
               <option value="Strawberry">Strawberry</option>
               <option value="Blueberry">Blueberry</option>
               <option value="Fudge">Fudge</option>
               </select>
               <input type+"submit" name"enter" value="Enter">
              </td>
             </tr>
            </form>
            <form action="" method="post">
                <tr>
               <td height="40">&nbsp;</td>
               <td> Alamat </td>
               <td><input type="text" name="alamat" size="20"></td>
                </tr>
                <tr>
               <td height="36">&nbsp;</td>
               <td> No Telepon </td>
               <td><input type="text" name="notelp" size="10"></td>
                </tr>
                <tr>
               <td height="36">&nbsp;</td>
               <td> Tanggal Pembelian </td>
               <td><input type="text" name="tglpembelians" size="20"></td>
                </tr>
                <tr>
               <td height="60">&nbsp;</td>
               <td> Alamat </td>
               <td><input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;
               <input type="reset" name="reset" value="reset"></td>
                </tr>
                </table>
                </form>
</div>
<div>
    <div id="footer"><a href="http://www.aszx.net">web development</a>by <a href="http://www.bryantsmith.com">bryant smith</a>
</div>
</body>
</html>
