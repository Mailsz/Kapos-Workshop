<?php
session_start();
include_once '../db.php';
  $nev = $_POST['name'];
  $email = $_POST['email'];
  $psw = $_POST['psw'];
  $psw_r = $_POST['psw_r'];

  $salt = openssl_random_pseudo_bytes(64);
  $hash = hash('sha256',$salt  .  $psw);

  //foglalt-e
  $sql = "SELECT * from felhasznalok where email ='$email'";
  $r = mysqli_query($connect, $sql);
  if(mysqli_fetch_assoc($r)!="") {
    $_SESSION['registerHiba'] = "Foglalt az email!";
    echo "<script>window.location.href='../regisztralas.php'</script>";
  }
  elseif ($psw!=$psw_r) {
    $_SESSION['registerHiba'] = "Nem egyezik a két jelszód!!! ! >:(";
    echo "<script>window.location.href='../regisztralas.php'</script>";
  }
  else {
    $sql = "INSERT INTO felhasznalok (nev,email,jelszo) VALUES ('$nev','$email','$hash')";
    mysqli_query($connect, $sql);
    echo "<script>window.location.href='../index.html'</script>";
  }
 ?>
