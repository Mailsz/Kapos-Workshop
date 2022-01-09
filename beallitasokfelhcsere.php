<?php
session_start();
include_once 'db.php';

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$ujfelhasznalo=$_POST['ujfelhasznalo'];

if (isset($_SESSION['felhasznalo']) && $_SESSION['felhasznalo']!="") {
   $salt = $_SESSION['felhasznalo'];
   $sql="UPDATE felhasznalok SET nev = '$ujfelhasznalo' WHERE salt = '$salt'";
   mysqli_query($connect, $sql);

   echo "<script>window.location.href='beallitasok.php'</script>";
}
 ?>
