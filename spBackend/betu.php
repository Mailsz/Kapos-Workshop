<?php
  session_start();
  if (isset($_POST['betu'])) {
    $betu = $_POST['betu'];
    if (str_contains($_SESSION['spSzo'],$betu)) {
      $betuk = str_split($_SESSION['spSzo']);
      $kitalalt = str_split($_SESSION['spKitalaltBetuk']);
      for ($i=0; $i < strlen($_SESSION['spSzo']); $i++) {
        if ($betuk[$i]==$betu) {
          $kitalalt[$i] = $betu;
        }
      }
      $_SESSION['spKitalaltBetuk'] = implode($kitalalt);
      echo implode($kitalalt);
    }
    else {
      $_SESSION['spHiba']+=1;
      echo $_SESSION['spHiba'];
    }
  }
 ?>
