<?php
session_start();
include_once '../db.php';
if (isset($_POST['betu'])) {
    $betu = $_POST['betu'];
    if ($_SESSION['ido'] > 0) {
        if (!in_array($betu, $_SESSION['spTippeltBetuk'])) {
            array_push($_SESSION["spTippeltBetuk"], $betu);
            if (str_contains($_SESSION['spSzo'], $betu)) {
                /*---Ha-jó-a-betű---*/
                /*logolni-db-ben*/
                if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo'] != '') {
                    $user = $_SESSION['felhasznalo'];
                    $language = $_SESSION['language'];
                    $difficulty = $_SESSION['difficulty'];
                    $time = $_SESSION['e_ido'];
                    $sql = "INSERT INTO characterlog (user, letter, language, difficulty, e_time, correct) VALUES('$user','$betu','$language','$difficulty', '$time', 1)";
                    mysqli_query($connect, "SET NAMES 'utf8'");
                    mysqli_query($connect, $sql);
                }

                $betuk = mb_str_split($_SESSION['spSzo']);
                $kitalalt = mb_str_split($_SESSION['spKitalaltBetuk']);
                for ($i = 0; $i < mb_strlen($_SESSION['spSzo'], 'UTF-8'); $i++) {
                    if ($betuk[$i] == $betu) {
                        $kitalalt[$i] = $betu;
                    }
                }

                $_SESSION['spKitalaltBetuk'] = implode($kitalalt);


                /*Ha kitalálta a szót*/
                if (!str_contains($_SESSION['spKitalaltBetuk'], '_')) {
                    array_push($_SESSION['kitalaltSzavak'], $_SESSION['spKitalaltBetuk']);


                    /*logolni-db-ben*/
                    if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo'] != '') {
                        $user = $_SESSION['felhasznalo'];
                        $language = $_SESSION['language'];
                        $difficulty = $_SESSION['difficulty'];
                        $word = $_SESSION['spKitalaltBetuk'];
                        $time = $_SESSION['e_ido'];
                        $sql = "INSERT INTO wordlog (user, word, difficulty, language, e_time) VALUES ('$user','$word','$difficulty','$language','$time')";
                        mysqli_query($connect, "SET NAMES 'utf8'");
                        mysqli_query($connect, $sql);
                    }

                    $difficulty = $_SESSION['difficulty'];
                    $language = $_SESSION['language'];

                    $sql = "SELECT szo FROM szavak WHERE nyelv='$language' AND nehezseg = '$difficulty' ORDER BY RAND() LIMIT 1 ";
                    mysqli_query($connect, "SET NAMES 'utf8'");
                    $r = mysqli_query($connect, $sql);

                    $_SESSION['spSzo'] = lcfirst(mysqli_fetch_assoc($r)['szo']);
                    $_SESSION['spKitalaltBetuk'] = "";
                    $_SESSION['spTippeltBetuk'] = [];
                    for ($i = 0; $i < mb_strlen($_SESSION['spSzo'], 'UTF-8'); $i++) {
                        $_SESSION['spKitalaltBetuk'] = $_SESSION['spKitalaltBetuk'] . '_';
                    }
                }
                $spKitalaltSzavak = $_SESSION['kitalaltSzavak'];
                $spKitalaltBetuk = $_SESSION['spKitalaltBetuk'];
                $spHibak = $_SESSION['spHiba'];
                $visszakuld = array("mistakes" => $spHibak, "spKitalaltBetuk" => "$spKitalaltBetuk", "spKitalaltSzavak" => json_encode($spKitalaltSzavak), "correct" => 1);
                echo json_encode($visszakuld);
            } else {
                /*logolni-db-ben*/
                if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo'] != '') {
                    $user = $_SESSION['felhasznalo'];
                    $language = $_SESSION['language'];
                    $difficulty = $_SESSION['difficulty'];
                    $time = $_SESSION['e_ido'];
                    $sql = "INSERT INTO characterlog (user, letter, language, difficulty, e_time, correct) VALUES('$user','$betu','$language','$difficulty','$time',0)";
                    mysqli_query($connect, "SET NAMES 'utf8'");
                    mysqli_query($connect, $sql);
                }

                /*Hiba sám hozzáadása*/
                $_SESSION['spHiba'] += 1;

                $spKitalaltSzavak = $_SESSION['kitalaltSzavak'];
                $spKitalaltBetuk = $_SESSION['spKitalaltBetuk'];
                $spHibak = $_SESSION['spHiba'];
                $visszakuld = array("mistakes" => $spHibak, "spKitalaltBetuk" => "$spKitalaltBetuk", "spKitalaltSzavak" => json_encode($spKitalaltSzavak), "correct" => 0);
                echo json_encode($visszakuld);
            }

        }
    }
}
?>
