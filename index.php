<?php session_start();
include_once 'db.php';
error_reporting(0);
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
<table>
    <tr>
        <td id="tableLeft">
            <img src="kepek/7.png" id="kep" alt="">
        </td>
        <td id="tableMid">
            <div class="gombok">
                <div class="inditas">
                    <!-- Singleplayer Gomb -->
                    <a href="spStart.php"><button type="button" name="egyjatekos">Egyjátékos</button></a>
                    <br>
                    <!-- Multiplayer Gomb -->
                    <button type="button" id="mp" name="tobbjatekos">Többjátékos</button>
                </div>
                <div class="belepes">
                    <!-- Login Gomb -->
                    <a href="login.php"><button type="button" name="bejelentkezes">Bejelentkezés</button></a>
                    <br>
                    <!-- Register Gomb -->
                    <a href="regisztralas.php"><button type="button" name="regisztralas">Regisztrálás</button></a>
                </div>
                <!-- Settings Gomb -->
                <button type="button" name="beallitasok"><i class="fa fa-gear"></i></button>
            </div>
        </td>

        <td id="tableRight">
            <h2 id="ranglistaCim" style="text-align: center">Ranglista</h2>
            <div id="ranglista" style="background: #3D56B2">
                <table id="ranglistaTable">
                    <tr>
                        <td>
                            <h2 style="text-align: center">Nevek</h2>
                        </td>
                        <td>
                            <h2 style="text-align: center">Kitalált szavak</h2>
                        </td>
                    </tr>
                    <tr>
                        <td><?php
                            $sql="SELECT user, COUNT(*) FROM wordlog GROUP BY user";
                            $r=mysqli_query($connect, $sql);
                            $row=0;
                            while(mysqli_fetch_assoc($r)["user"]){
                                $row+=1;
                            }

                            $sql = "SELECT felhasznalok.nev, COUNT(word) FROM wordlog LEFT JOIN felhasznalok ON felhasznalok.salt = wordlog.user  GROUP BY user ORDER BY COUNT(word) DESC";
                            $r=mysqli_query($connect, $sql);

                            if($row>10){
                                $row=10;
                            }
                            for ($i=0; $i < $row; $i++) {
                                echo mysqli_fetch_column($r, 0);
                                echo "<br>";
                            }
                            ?></td>

                        <td>
                            <?php
                            $r=mysqli_query($connect, $sql);
                            for ($i=0; $i < $row; $i++) {
                                echo mysqli_fetch_column($r, 1);
                                echo "<br>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
