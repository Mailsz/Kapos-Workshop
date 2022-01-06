<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hang Out!</title>
    <!-- CSS link  -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- JavaScript és JQuery link  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <?php
          include_once 'db.php';
          $randId = rand(1,58);
          $sql = "SELECT szo FROM szavak WHERE id='$randId' AND nyelv='angol'";
          mysqli_query($connect,"SET NAMES 'utf8'");
          $r = mysqli_query($connect,$sql);
          $_SESSION['spSzo'] = lcfirst(mysqli_fetch_assoc($r)['szo']);
          $_SESSION['spHiba'] = 0;
          $_SESSION['spKitalaltBetuk'] = "";
          for ($i=0; $i < strlen($_SESSION['spSzo']); $i++) {
            $_SESSION['spKitalaltBetuk']=$_SESSION['spKitalaltBetuk'].'_';
          }
          echo $_SESSION['spSzo'];
         ?>

         <script type="text/javascript"></script>
</head>
<body>
<section id="szo_sec">
    <p id="szo"><?php
        echo $_SESSION['spKitalaltBetuk'];
     ?></p>
</section>
<!-- Akasztás folyamata képeken demonstrálva  -->
<section id="kep_sec">
    <hr class="hrtop">
    <img src="kepek/0.png" id="kep">
    <p id="hibak">Hibák száma: 0</p>
</section>

<section id="betu_sec">
    <!-- Betű gombok  -->
    <div class="betu_div">
        <button id="a" class="betu" accesskey="a" onclick="button(this.id)">A</button>
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

    <script type="text/javascript">
      $(function() {
        $('body').keypress(function(e) {
            button(e.key)
        });
      });
    </script>
</section>
<?php include_once 'js/betuSP.php' ?>
</body>
</html>
