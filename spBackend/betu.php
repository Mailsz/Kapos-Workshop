<?php
  session_start();
  if (isset($_POST['betu'])) {
    $betu = $_POST['betu'];
    if (str_contains($_SESSION['spSzo'],$betu)) {
      echo "1";
    }
    else {
      echo "0";
      $aktHibaSzam = $_SESSION['spHiba'];
      $aktHibaSzam+=1;
      $_SESSION['spHiba']=$aktHibaSzam;
      echo "|".$_SESSION['spHiba'];
    }
  }
 ?>
