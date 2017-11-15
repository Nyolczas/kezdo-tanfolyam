<?php
// Űrlap feldolgozása
// isset - ha létezik
if (isset($_POST['rendben'])) {
    // print_r fejlesztés közben használjuk az oldalra kiírja a bemeneti értékeket.
    //print_r($_POST);

    // Változók Tisztítása
    // ucfirst - csak az első betűt alakítja naggyá
    $nev    = strip_tags(ucwords(strtolower(trim($_POST['nev']))));
    $cegnev = strip_tags(trim($_POST['cegnev']));
    $mobil  = strip_tags(trim($_POST['mobil']));
    $email  = strip_tags(strtolower(trim($_POST['email'])));
	
	// Változók vizsgálata
	if (empty($nev)) 
		$hibak[] = "Nem adtál meg nevet!";
	elseif (strlen($nev) < 5) 
		$hibak[] = "Rossz nevet adtál meg!";
	if (!empty($mobil) && strlen($mobil) < 9) 
		$hibak[] = "Rossz mobilszámot adtál meg!";
	if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) 
		$hibak[] = "Rossz e-mail címet adtál meg!";
	
    // Adatbázis feltöltése
    require("../kapcsolat.php");
    $sql = "INSERT INTO nevjegyek
            (nev, cegnev, mobil, email)
            VALUES
            ('{$nev}', '{$cegnev}', '{$mobil}', '{$email}')";
    mysqli_query($dbconn, $sql);
    // átirányítás:
    header("Location: lista.php");
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
        <p><a href="lista.php">Vissza</a></p>
    </form>
</body>
</html>