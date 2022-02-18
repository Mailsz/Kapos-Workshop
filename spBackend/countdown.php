<?php
  session_start();
  $_SESSION['ido']-=1;
  $ido = $_SESSION['ido'];
  if ($ido<1) {
    echo "Az idő lejárt!";
  }
  else {
    echo $ido;
  }
 ?>
