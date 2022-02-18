<?php session_start();
include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hang Out!</title>
    <!-- FontAwesome és Css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fooldal.css">
    <!-- JavaScript és JQuery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
</head>
<body>
<h1>Hang Out!</h1>
<!-- felhasznalonev kiirasa -->
<h3 id="felhNev"><?php
    if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo'] != "") {
        $salt = $_SESSION['felhasznalo'];
        $sql = "SELECT nev FROM felhasznalok WHERE salt='$salt'";
        mysqli_query($connect, "SET NAMES 'utf8'");
        $r = mysqli_query($connect, $sql);
        echo mysqli_fetch_assoc($r)['nev'];
    }
    ?></h3>
<!-- logout gomb ha bevan jelentkezve -->
<?php
if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo'] != "") {
    echo "<form method='POST' action='belepes/logout.php'><button name='logout' type='submit' id='logout'>Kijelentkezés</button></form>";
}
?>
<div class="gombok">
    <div class="inditas">
        <!-- Singleplayer Gomb -->
        <button type="button" name="egyjatekos">Egyjátékos</button>
        <br>
        <!-- Multiplayer Gomb -->
        <button type="button" id="mp" name="tobbjatekos">Többjátékos</button>
    </div>
    <div class="belepes">
        <!-- Login Gomb -->
        <button type="button" name="bejelentkezes">Bejelentkezés</button>
        <br>
        <!-- Register Gomb -->
        <button type="button" name="regisztralas">Regisztrálás</button>
    </div>
    <!-- Settings Gomb -->
    <button type="button" name="beallitasok"><i class="fa fa-gear"></i></button>
</div>
<div class="ranglista">
    <?php
    $sql = "SELECT COUNT(word), user FROM wordlog GROUP BY user";
    mysqli_query($connect, "SET NAMES 'utf8'");
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['user'];
        echo $row['COUNT(word)'];
    }
    ?>
</div>
<script type="text/javascript" src="js/iranyitas.js"></script>
</body>
</html>
