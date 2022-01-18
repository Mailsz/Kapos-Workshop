<?php session_start() ?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bejelentkezés</title>

    <!--Jquery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- FontAwesome(ikonok) és CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\login.css">

</head>
<body>


<form id="form" method="POST" action="belepes/login.php">

    <h1 style="text-align: center">Bejelentkezés</h1>
    <br>
    <div class="container">
        <!-- Email megadása mező  -->
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Email" name="email" id="email" required>
        <!-- Jelszó megadása mező  -->
        <label for="psw"><b>Jelszó</b></label>
        <input type="password" placeholder="Jelszó" name="psw" id="psw" required>

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <br>
                <!-- Login gomb  -->
                <button type="submit" class="registerbtn" id="login">Bejelentkezés</button>
                <div class="hibauzenet" id="login_valasz"><?php echo $_SESSION['loginHiba'];
                    $_SESSION['loginHiba'] = "" ?></div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <br>

    <div class="container signin">
        <!-- Regisztációs oldal link  -->
        <h3>Még nem regisztrált?</h3>
        <a href="Regisztralas.php">Regisztráció</a>
    </div>

</form>

</body>
</html>
