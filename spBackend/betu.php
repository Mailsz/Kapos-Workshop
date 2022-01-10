<?php
session_start();
include_once '../db.php';
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
        /*Ha kitalálta a szót*/
        if (!str_contains($_SESSION['spKitalaltBetuk'],'_')) {
          $sql = "SELECT szo FROM szavak WHERE nyelv='angol' AND nehezseg = 'konnyu' ORDER BY RAND() LIMIT 1 ";
          mysqli_query($connect,"SET NAMES 'utf8'");
          $r = mysqli_query($connect,$sql);

          $_SESSION['spSzo'] = lcfirst(mysqli_fetch_assoc($r)['szo']);
          $_SESSION['spKitalaltBetuk'] = "";
          $_SESSION['spTippeltBetuk']=[];
          for ($i=0; $i < mb_strlen($_SESSION['spSzo'],'UTF-8'); $i++) {
            $_SESSION['spKitalaltBetuk']=$_SESSION['spKitalaltBetuk'].'_';
          }
        }
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
