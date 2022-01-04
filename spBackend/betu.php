<?php
  session_start();
  if (isset($_POST['betu'])) {
    $betu = $_POST['betu'];
    if (strpos($_SESSION['spSzo'],$betu)) {
      echo $betu."1";
    }
    else {
      echo "0";
    }
  }
 ?>
