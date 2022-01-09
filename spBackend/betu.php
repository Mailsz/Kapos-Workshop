<?php
  session_start();
  if (isset($_POST['betu'])) {
    $betu = $_POST['betu'];
    if (!in_array($betu, $_SESSION['spTippeltBetuk'])) {
      if (str_contains($_SESSION['spSzo'],$betu)) {
        /*Ha jó a betű*/
        $betuk = mb_str_split($_SESSION['spSzo']);
        $kitalalt = mb_str_split($_SESSION['spKitalaltBetuk']);
        for ($i=0; $i < mb_strlen($_SESSION['spSzo'],'UTF-8'); $i++) {
          if ($betuk[$i]==$betu) {
            $kitalalt[$i] = $betu;
          }
        }
        $_SESSION['spKitalaltBetuk'] = implode($kitalalt);
        echo $_SESSION['spKitalaltBetuk'];
      }
      else {
        /*Hiba sám hozzáadása*/
        $_SESSION['spHiba']+=1;
        echo $_SESSION['spHiba'];
      }
      array_push($_SESSION["spTippeltBetuk"],$betu);
    }
  }
 ?>
