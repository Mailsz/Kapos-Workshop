<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hang Out!</title>
    <!-- CSS link  -->
    <link rel="stylesheet" href="css/main.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- JavaScript és JQuery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <?php
    include_once 'db.php';
    $difficulty = $_POST['difficulty'];
    $_SESSION['difficulty'] = $difficulty;

    $_SESSION['ido'] = $_POST['time'];
    $_SESSION['e_ido'] = $_POST['time'];

    $language = $_POST['language'];
    $_SESSION['language'] = $language;
    $sql = "SELECT szo FROM szavak WHERE nyelv='$language' AND nehezseg = '$difficulty' ORDER BY RAND() LIMIT 1 ";
    mysqli_query($connect, "SET NAMES 'utf8'");
    $r = mysqli_query($connect, $sql);

    $_SESSION['spSzo'] = lcfirst(mysqli_fetch_assoc($r)['szo']);
    $_SESSION['spKitalaltBetuk'] = "";
    $_SESSION['spTippeltBetuk'] = [];

    $_SESSION['spHiba'] = 0;

    $_SESSION['kitalaltSzavak'] = [];

    for ($i = 0; $i < mb_strlen($_SESSION['spSzo'], 'UTF-8'); $i++) {
        $_SESSION['spKitalaltBetuk'] = $_SESSION['spKitalaltBetuk'] . '_';
    }
    ?>
</head>
<body>

<section id="szo_sec">
    <p id="countdown"></p>
    <p id="szo"><?php
        echo $_SESSION['spKitalaltBetuk'];
        ?></p>

</section>
<!-- Akasztás folyamata képeken demonstrálva  -->
<section id="kep_sec">
    <hr class="hrtop">
    <img src="kepek/0.png" id="kep">
    <p id="hibak">Hibák száma: 0</p>

    <div id="kszd">
        <h1 id="ksz">Kitalált szavak:</h1>
        <ul id="guessedWords">
    </div>
    </ul>
    <p id="jatekUjra"></p>
</section>

<section id="betu_sec">
    <!-- Betű gombok  -->
    <?php
    if ($language == 'magyar') {
        echo '
        <div class="betu_div">
        <button id="a" class="betu" onclick="button(this.id)">A</button>
        <button id="á" class="betu" onclick="button(this.id)">Á</button>
        <button id="b" class="betu" onclick="button(this.id)">B</button>
        <button id="c" class="betu" onclick="button(this.id)">C</button>
        <button id="d" class="betu" onclick="button(this.id)">D</button>
        <button id="e" class="betu" onclick="button(this.id)">E</button>
        <button id="é" class="betu" onclick="button(this.id)">É</button>
        <button id="f" class="betu" onclick="button(this.id)">F</button>
        <button id="g" class="betu" onclick="button(this.id)">G</button>
        <button id="h" class="betu" onclick="button(this.id)">H</button>
        <button id="i" class="betu" onclick="button(this.id)">I</button>
        <button id="í" class="betu" onclick="button(this.id)">Í</button>
        <button id="j" class="betu" onclick="button(this.id)">J</button>
        <button id="k" class="betu" onclick="button(this.id)">K</button>
        <button id="l" class="betu" onclick="button(this.id)">L</button>
        <button id="m" class="betu" onclick="button(this.id)">M</button>
        <button id="n" class="betu" onclick="button(this.id)">N</button>
        <button id="o" class="betu" onclick="button(this.id)">O</button>
        <button id="ó" class="betu" onclick="button(this.id)">Ó</button>
        <button id="ö" class="betu" onclick="button(this.id)">Ö</button>
        <button id="ő" class="betu" onclick="button(this.id)">Ő</button>
        <button id="p" class="betu" onclick="button(this.id)">P</button>
        <button id="q" class="betu" onclick="button(this.id)">Q</button>
        <button id="r" class="betu" onclick="button(this.id)">R</button>
        <button id="s" class="betu" onclick="button(this.id)">S</button>
        <button id="t" class="betu" onclick="button(this.id)">T</button>
        <button id="u" class="betu" onclick="button(this.id)">U</button>
        <button id="ú" class="betu" onclick="button(this.id)">Ú</button>
        <button id="ü" class="betu" onclick="button(this.id)">Ü</button>
        <button id="ű" class="betu" onclick="button(this.id)">Ű</button>
        <button id="v" class="betu" onclick="button(this.id)">V</button>
        <button id="w" class="betu" onclick="button(this.id)">W</button>
        <button id="x" class="betu" onclick="button(this.id)">X</button>
        <button id="y" class="betu" onclick="button(this.id)">Y</button>
        <button id="z" class="betu" onclick="button(this.id)">Z</button>
        </div>
        ';
    } else {
        echo '
        <div class="betu_div">
        <button id="a" class="betu" onclick="button(this.id)">A</button>
        <button id="b" class="betu" onclick="button(this.id)">B</button>
        <button id="c" class="betu" onclick="button(this.id)">C</button>
        <button id="d" class="betu" onclick="button(this.id)">D</button>
        <button id="e" class="betu" onclick="button(this.id)">E</button>
        <button id="f" class="betu" onclick="button(this.id)">F</button>
        <button id="g" class="betu" onclick="button(this.id)">G</button>
        <button id="h" class="betu" onclick="button(this.id)">H</button>
        <button id="i" class="betu" onclick="button(this.id)">I</button>
        <button id="j" class="betu" onclick="button(this.id)">J</button>
        <button id="k" class="betu" onclick="button(this.id)">K</button>
        <button id="l" class="betu" onclick="button(this.id)">L</button>
        <button id="m" class="betu" onclick="button(this.id)">M</button>
        <button id="n" class="betu" onclick="button(this.id)">N</button>
        <button id="o" class="betu" onclick="button(this.id)">O</button>
        <button id="p" class="betu" onclick="button(this.id)">P</button>
        <button id="q" class="betu" onclick="button(this.id)">Q</button>
        <button id="r" class="betu" onclick="button(this.id)">R</button>
        <button id="s" class="betu" onclick="button(this.id)">S</button>
        <button id="t" class="betu" onclick="button(this.id)">T</button>
        <button id="u" class="betu" onclick="button(this.id)">U</button>
        <button id="v" class="betu" onclick="button(this.id)">V</button>
        <button id="w" class="betu" onclick="button(this.id)">W</button>
        <button id="x" class="betu" onclick="button(this.id)">X</button>
        <button id="y" class="betu" onclick="button(this.id)">Y</button>
        <button id="z" class="betu" onclick="button(this.id)">Z</button>
        </div>
        ';
    }
    ?>

    <script type="text/javascript">
        $(function () {
            kitalaltSzavakDb = 0
            $('body').keypress(function (e) {
                button(e.key.toLowerCase())
            });
        });

        setInterval(function () {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'spBackend/countdown.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                $("#countdown").html(this.responseText);
                console.log(this.responseText);
                if (parseInt(this.responseText) == 1) {
                    $("#jatekUjra").html('<button onclick="location.reload()">Játék újra</button>')
                }
            }
            xhr.send();
        }, 1000)
    </script>


    </div>

</section>
<script>
    function button(id) {
        var betu = document.getElementById(id).innerHTML.toLowerCase()
        $("button#" + id).prop('disabled', true);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'spBackend/betu.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            console.log(this.responseText)
            if (this.responseText != "") {
                var received = JSON.parse(this.responseText)
                $("#szo").html(received.spKitalaltBetuk)
                $("#hibak").html("Hibák száma: " + received.mistakes)
                var kitaltSzavak = JSON.parse(received.spKitalaltSzavak)
                var kitaltSzavakOutPut = ""
                if (received.correct == 1) {
                    $('#' + betu).css("background-color", "green")
                } else {
                    $('#' + betu).css("background-color", "red")
                }
                if (kitalaltSzavakDb < kitaltSzavak.length) {
                    $('button').prop('disabled', false);
                    $('button').css("background-color", '')
                }
                kitalaltSzavakDb = kitaltSzavak.length
                for (var i = 0; i < kitaltSzavak.length; i++) {
                    kitaltSzavakOutPut += "<li>" + kitaltSzavak[i] + "</li>"
                }
                $("#guessedWords").html(kitaltSzavakOutPut)
            }
        }
        xhr.send("betu=" + betu);
    }
</script>
</body>
</html>
