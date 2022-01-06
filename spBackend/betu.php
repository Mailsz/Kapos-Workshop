<?php
  session_start();
  if (isset($_POST['betu'])) {
    $betu = $_POST['betu'];
    if (str_contains($_SESSION['spSzo'],$betu)) {
      $betuk = str_split($_SESSION['spSzo']);
      echo '1|';
      for ($i=0; $i < strlen($_SESSION['spSzo']); $i++) {
        if ($betuk[$i]==$betu) {
          echo $i.'_';
        }
      }
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
