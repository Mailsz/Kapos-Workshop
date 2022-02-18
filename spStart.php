<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hang out!</title>
    <link rel="stylesheet" href="css/spstart.css">
</head>
<body>
<div class="beallitas">
    <form class="" action="singleplayer.php" method="post">

      <label class="opcio" for="">Nehézségi szint:</label>
      <br>
      <select class="" name="difficulty">
        <option value="konnyu">Könnyű</option>
        <option value="kozepes">Normál</option>
        <option value="nehez">Nehéz</option>
      </select>
      <br>
      <br>
      <br>
      <label class="opcio" for="">Nyelv:</label>
      <br>
      <select class="" name="language">
        <option value="angol">Engish</option>
        <option value="magyar">Magyar</option>
      </select>
      <br>
      <br>
      <br>
      <label for="" class="opcio" >Időkorlát:</label>
      <br>
      <select class="" name="time">
        <option value="30">30</option>
        <option value="60">60</option>
        <option value="90">90</option>
        <option value="120">120</option>
      </select>
      <br>
      <br>
      <br>
      <!--<button type="submit" name="button">Indítás</button>-->
      <button type="submit" name="button" id="start">Indítás</button>

    </form>
</div>
</body>
</html>
