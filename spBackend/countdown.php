<?php
  session_start();
  $_SESSION['ido']-=1;
  $ido = $_SESSION['ido'];
  if ($ido==0) {
    echo "Time is over";
  }
  else {
    echo $ido;
  }
 ?>