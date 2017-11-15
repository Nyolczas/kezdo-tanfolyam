<?php
// Űrlap feldolgozása
// isset - ha létezik
if (isset($POST['rendben'])) {
    $nev    = $_POST['nev'];
    $cegnev = $_POST['cegnev'];
    $mobil  = $_POST['mobil'];
    $email  = $_POST['email'];
    // Adatbázis feltöltése
    $sql = "...";
    require("../kapcsolat.php");
    mysqli_query($dbconn, $sql);
    // print_r fejlesztés közben használjuk az oldalra kiírja a bemeneti értékeket.
    //print_r($_POST);
}
// Űrlap megjelenítése
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Felvitel</title>
    <link rel="stylesheet" href="../stilus.css">
</head>
<body>
    <h1>Névjegykártyák</h1>
    <form method="post" action="">
        <p> <label for="nev">Név*:</label>
            <br>
            <input type="text" id="nev" name="nev" required>
        </p>
        <p> <label for="cegnev">Cégnév:</label>
            <br>
            <input type="text" id="cegnev" name="cegnev">
        </p>
        <p> <label for="mobil">Mobil:</label>
            <br>
            <input type="tel" id="mobil" name="mobil">
        </p>
        <p> <label for="email">E-mail:</label>
            <br>
            <input type="email" id="email" name="email">
        </p>
        <p><em>A *-gal jelölt mezők kitölése kötelező!</em></p>
        <input type="submit" id="rendben" name="rendben" value="Rendben">
        <input type="reset" value="Mégse">
    </form>
</body>
</html>