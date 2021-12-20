<?php
include_once '../db.php';

$felhasznalo=$_POST["felhasznalo"];
$email=$_POST["email"];
$jelszo=$_POST["psw"];
$jelszomeg=$_POST["psw_r"];
if ($jelszomeg!=$jelszo) {
  echo "<script>window.location.href='../Regisztralas.html'</script>";
}else{

}


 ?>
