<?php
session_start();
  if (isset($_POST['logout'])) {
    $_SESSION['felhasznalo']="";
  }
  echo "<script>window.location.href='../index.php'</script>";
 ?>
