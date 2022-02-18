<?php session_start();
error_reporting(0);
 ?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regisztráció</title>
    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

    <!--Jquery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- FontAwesome(Ikonok) és CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\Login.css">
</head>
<body>


<form id="form" method="POST" action="belepes/register.php">

    <h1 style="text-align: center">Regisztráció</h1>
    <br>
    <div class="container">
        <!-- név megadása mező  -->
        <label for="email"><b>Név</b></label>
        <input type="text" placeholder="Név" name="name" id="email" required>
        <!-- Email megadása mező  -->
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Email" name="email" id="email" required>
        <!-- Jelszó megadása mező  -->
        <label for="psw"><b>Jelszó</b></label>
        <input type="password" placeholder="Jelszó" name="psw" id="psw" required>

        <!-- Jelszó megerősítése mező  -->
        <label for="psw"><b>Jelszó megerősítése</b></label>
        <input type="password" placeholder="Jelszó megerősítése" name="psw_r" id="psw" required>


        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <br>
                <!-- Regisztrálás  -->
                <button type="submit" class="registerbtn" id="login">Regisztrálás</button>
                <div class="hibauzenet" id="login_valasz"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <p id="hibauzenet"><?php echo $_SESSION['registerHiba'];
        $_SESSION["registerHiba"] = "" ?></p>
    <br>

    <div class="container signin">
        <!-- Bejelentkezés oldal link  -->
        <h3>Már van fiókja?</h3>
        <a href="Login.php">Bejelentkezés</a>
    </div>
</form>

</body>
</html>
