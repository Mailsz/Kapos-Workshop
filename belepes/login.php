<?php
if (isset($_POST['email']) && isset($_POST['psw'])) {
  session_start();
  include_once '../db.php';
  $email = $_POST['email'];
  $psw = $_POST['psw'];

  $sql = "SELECT * FROM felhasznalok WHERE email = '$email'";
  mysqli_query($connect,"SET NAMES 'utf8'");
  $db_jelszo_dec = mysqli_query($connect, $sql);
  $row = mysqli_fetch_assoc($db_jelszo_dec);
  if ($row['jelszo']==hash('sha256' , hex2bin($row["salt"]) . $psw)) {
    $_SESSION['felhasznalo'] = $row['salt'];
  }
  else {
    $_SESSION['loginHiba'] = "Nem egyezik az emailcím a jelszóval!";
    echo "<script>window.location.href = '../login.php'</script>";
  }
}
echo "<script>window.location.href = '../index.php'</script>";
 ?>
