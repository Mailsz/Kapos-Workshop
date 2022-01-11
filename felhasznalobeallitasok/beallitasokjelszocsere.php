<?php
session_start();
include_once '../db.php';

$psw_meger=$_POST['jelszoMeger'];
$psw_new=$_POST['jelszoUj'];
$salt=$_SESSION['felhasznalo'];

$sql="SELECT jelszo FROM felhasznalok WHERE salt='$salt'";
mysqli_query($connect,"SET NAMES 'utf8'");
$r=mysqli_query($connect, $sql);
$jelszoHash=mysqli_fetch_assoc($r)['jelszo'];
$ujJelszo=utf8_encode(hash('sha256', hex2bin($salt) . $psw_new));
$_SESSION['jelszocsereAlert']="";


if ($jelszoHash == hash('sha256' , hex2bin($salt) . $psw_meger)) {
  $sql="UPDATE felhasznalok SET jelszo='$ujJelszo' WHERE salt='$salt'";
  mysqli_query($connect, $sql);
  $_SESSION['jelszocsereAlert']='A jelszavát sikeresen megváltoztatta!';
}
elseif ($psw_meger== "" or $psw_new=="") {
  $_SESSION['jelszocsereAlert']='Töltse ki mindkét mezőt!';
}
else{
  $_SESSION['jelszocsereAlert']='A jelszavát nem sikerült megváltoztatnia... :(';
}
echo "<script>window.location.href = '../beallitasok.php'</script>";
?>
