<?php
require("kapcsolat.php");

//LApozó

$lapozo = "Első | Előző | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | Következő | Utolsó";

//print_r ($_POST); 
$kifejezes = (isset($_POST['kifejezes'])) ? $_POST['kifejezes'] : "";
$sql = "SELECT *
        FROM nevjegyek
        WHERE (
            nev LIKE '%{$kifejezes}%'
            OR cegnev LIKE '%{$kifejezes}%'
            OR mobil LIKE '%{$kifejezes}%'
            OR email LIKE '%{$kifejezes}%'
            )
        ORDER BY nev ASC";
$eredmeny = mysqli_query($dbconn, $sql);  
$kimenet = "";
// kiolvasás:
while ($sor = mysqli_fetch_assoc($eredmeny)) {
    $kimenet.= "<article>
        <h2>{$sor['nev']}</h2>
        <h3>{$sor['cegnev']}</h3>
        <p><a href=\"tel:{$sor['mobil']}\">Mobil: {$sor['mobil']}</a></p>
        <p><a href=\"mailto: {$sor ['email']}\">Email: {$sor ['email']}</a></p>
        </article>\n";
        // print_r($sor);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Névjegykártyák</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <h1>Névjegykártyák</h1>
    <form method="post" action="">
        <input type="search" id="kifejezes" name="kifejezes">
    </form>
    <?php print $lapozo; ?>
	<?php print $kimenet; ?>
	<?php print $lapozo; ?>
</body>
</html>