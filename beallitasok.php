<?php session_start();
  include_once 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Beállítások</title>
    <link rel="stylesheet" href="css/beallitasok.css">
    <!-- JQuery link  -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  </head>
  <body>

    <h1>Beállítások</h1>

    <div class="beallitasok">
      <!-- Nyelv Legördülő Menü  -->
      <label for="Nyelv">Nyelv:</label>
      <select class="" name="Nyelv">
        <option value="">Magyar</option>
        <option value="">English</option>
        <option value="">Suomi</option>
      </select>

      <br>
      <br>
      <!-- Hang Slider  -->
      <label for="">Hang:</label>
      <input type="range" value="0">
      <!-- Némítás doboz  -->
      <div id="h4-container"><div id="h4-subcontainer"></div>
      <input type="checkbox" name="checkbox">
      <br>
      <!-- Sötét Mód Doboz  -->
      <label for="">Sötét mód:</label>
      <input type="checkbox" name="checkbox">
    </div>

    <!-- Felhasználói beállítások  -->
    <h2>Felhasználónév megváltoztatása</h2>

    <!-- Felhasználócsere form -->
    <form class="" action="felhasznalobeallitasok/beallitasokfelhcsere.php" method="POST">
      <div class="felhasznalobeall">
        <p id="felhCsere">Jelenlegi felhasználónév: <?php
          if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo']!="") {
            $salt = $_SESSION['felhasznalo'];
            $sql = "SELECT nev FROM felhasznalok WHERE salt='$salt'";
            mysqli_query($connect,"SET NAMES 'utf8'");
            $r = mysqli_query($connect, $sql);
            echo mysqli_fetch_assoc($r)['nev'];
          }
        ?></p>
        <label for="ujfelhasznalo" id="felhCsere">Írja be az új felhasználónevet!</label>
        <input type="text" name="ujfelhasznalo" placeholder="Új felhasználónév" id="felhCsere">
          <br>
        <button type="submit" name="button">Felhasználónév megváltoztatása</button>
          <br>
      </div>
    </form>
    <!-- Jelszó csere form -->
    <h2>Jelszó megváltoztatása</h2>
    <form class="jelszoCsere" action="felhasznalobeallitasok/beallitasokjelszocsere.php" method="POST">
      <div class="">
        <label for="jelszoMeger">Adja meg a jelenlegi jelszavát!</label>
        <input type="password" name="jelszoMeger" placeholder="Jelenlegi jelszó">
      </div>
      <div class="">
        <label for="jelszoUj">Adja meg az új jelszót!</label>
        <input type="password" name="jelszoUj" placeholder="Új jelszó">
      </div>
      <button type="submit" name="button">Jelszó megváltoztatása</button>
      <?php
      echo $_SESSION['jelszocsereAlert'];
      $_SESSION['jelszocsereAlert']="";
      ?>
    </form>

    <!-- Hangerő Slider Színátmenete (Edgeben nem működik )  -->
    <script type="text/javascript">
    $(function() {
var rangePercent = $('[type="range"]').val();
$('[type="range"]').on('change input', function() {
  rangePercent = $('[type="range"]').val();
  $('h4').html(rangePercent+'<span></span>');
  $('[type="range"], h4>span').css('filter', 'hue-rotate(-' + rangePercent + 'deg)');
  // $('h4').css({'transform': 'translateX(calc(-50% - 20px)) scale(' + (1+(rangePercent/100)) + ')', 'left': rangePercent+'%'});
  $('h4').css({'transform': 'translateX(-50%) scale(' + (1+(rangePercent/100)) + ')', 'left': rangePercent+'%'});
});
});
    </script>
  </body>
</html>
