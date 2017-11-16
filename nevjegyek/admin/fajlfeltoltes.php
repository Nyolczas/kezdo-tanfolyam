<?php
if (isset($_POST['rendben'])) {
	
	$mime = array("image/jpeg", "image/pjpeg", "image/png", "image/gif");	
	if (in_array($_FILES['file']['type'], $mime)) {
			$kimenet = "<h3>Feltöltött fájl adatai:</h3>
			<ul>
				<li>Filenév: {$_FILES['fajl']['name']}</li>
				<li>Ideiglenes név:: {$_FILES['fajl']['tmp_name']}</li>
				<li>Hibakód: {$_FILES['fajl']['error']}</li>
				<li>Fileméret: {$_FILES['fajl']['size']} bytes</li>
				<li>Filetípus: {$_FILES['fajl']['type']}</li>
			</ul>";
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