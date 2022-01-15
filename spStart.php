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
        <label for="">Difficulty:</label>
        <select class="" name="difficulty">
            <option value="konnyu">easy</option>
            <option value="kozepes">normal</option>
            <option value="nehez">hard</option>
        </select>
        <label for="">Language:</label>
        <select class="" name="language">
            <option value="angol">engish</option>
            <option value="magyar">hungarian</option>
        </select>
        <<<<<<< Updated upstream
        <label for="">Time:</label>
        <select class="" name="time">
            <option value="30">30</option>
            <option value="60">60</option>
            <option value="90">90</option>
            <option value="120">120</option>
        </select>
        <button type="submit" name="button">Start</button>
        =======
        <button type="submit" name="button" id="start">Start</button>
        >>>>>>> Stashed changes
    </form>
</div>
</body>
</html>
