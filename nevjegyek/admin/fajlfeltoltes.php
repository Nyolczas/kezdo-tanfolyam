<?php

//print_r(ekezettelen("Árvíztűrő tükörfúrógép"));

function ekezettelen($szoveg) {
	$mit = array("á", "é", "í", "ó", "ö", "ő", "ú", "ü", "ű", "Á", "É", "Í", "Ó", "Ö", "Ő", "Ú", "Ü", "Ű", "_", " ");
	$mire = array("a", "e", "i", "o", "o", "o", "u", "u", "u", "A", "E", "I", "O", "O", "O", "U", "U", "U", "-", "-");
	return str_replace($mit, $mire, $szoveg);
}

if (isset($_POST['rendben'])) {
	
	//Engedélyezett típusok
	$mime = array("image/jpeg", "image/pjpeg", "image/png", "image/gif");	
	//Filetipus meghatározása és méret korlátozása
	if (in_array($_FILES['fajl']['type'], $mime) && $_FILES['fajl']['size'] < 2000000) {
		$kimenet = "<h3>Feltöltött fájl adatai:</h3>
		<ul>
			<li>Filenév: {$_FILES['fajl']['name']}</li>
			<li>Ideiglenes név:: {$_FILES['fajl']['tmp_name']}</li>
			<li>Hibakód: {$_FILES['fajl']['error']}</li>
			<li>Fileméret: {$_FILES['fajl']['size']} bytes</li>
			<li>Filetípus: {$_FILES['fajl']['type']}</li>
		</ul>";
		
		// Új fájlnév időbélyeg - ékezettelen
		$fajl = date("U-").ekezettelen($_FILES['fajl']['name']);
		if (!file_exists("kepek/".$fajl)) {
			move_uploaded_file($_FILES['fajl']['tmp_name'], "kepek/".$fajl);
		}
		
	}
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fájlfeltöltés</title>
</head>
<body>
<h1>Fájlfeltöltés</h1>
    <form method="post" action="" enctype="multipart/form-data">
	<?php if (isset($kimenet)) print $kimenet; ?>
        <input type="file" id="fajl" name="fajl">
		<input type="submit" id="rendben" name="rendben" value="Feltöltés">
    </form>
</body>
</html>