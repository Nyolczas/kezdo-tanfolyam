<?php
require("kapcsolat.php");

// ====== Beállítások ======
$mennyit = 10;
$aktualis = (isset($_GET['oldal'])) ? (int)$_GET['oldal'] : 1;
$honnan = ($aktualis-1)*$mennyit;

// ====== Lapozó ======
$lapozo = "<p>";
$lapozo.= ($aktualis != 1) ? "<a href='?oldal=1'>Első | </a>" : "Első | ";
$lapozo.= ($aktualis > 1 && $aktualis <= 12) ? "<a href='?oldal=".($aktualis-1)."'>Előző | </a>" : "Előző | ";
for ($oldal = 1; $oldal <=12; $oldal++) {
	$lapozo.= ($aktualis != $oldal) ? "<a href='?oldal={$oldal}'> {$oldal}</a> |" : $oldal." |";
}
$lapozo.= ($aktualis > 1 && $aktualis <= 12) ? "<a href='?oldal=".($aktualis+1)."'> Következő | </a>" : " Következő | ";
$lapozo.= ($aktualis != 12) ? "<a href='?oldal=12'>Utolsó</a>" : "Utolsó";
$lapozo.= "</p>";

//print_r($_GET);
//$_GET['oldal'];


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
        ORDER BY nev ASC
		LIMIT {$honnan}, {$mennyit}";
$eredmeny = mysqli_query($dbconn, $sql);  

if (@mysqli_num_rows($eredmeny) < 1) {
	$kimenet = "<article>
        <h2>Nincs találat a rendszerben!</h2>
        </article>\n";
}
else {
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
</body>
</html>