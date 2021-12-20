<?php
include_once '../db.php';
  $nev = $_POST['name'];
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $psw_r = $_POST['psw_r'];

  $salt = openssl_random_pseudo_bytes(64);
  $hash = hash('sha256',$salt  .  $psw);

  $sql = "INSERT INTO felhasznalok(nev,email,jelszo) VALUES ('$nev','$email','$hash')";
  mysqli_connect($connect,$sql);
 ?>
