<?php
session_start();

if (isset($_POST['rendben'])) {
	
	//változók tisztítása
	$email = strip_tags(strtolower(trim($_POST['email'])));
	$jelszo = strip_tags($_POST['jelszo']);
	//változók ellenőrzése
	if (empty($email) || 
		!filter_var($email, FILTER_VALIDATE_EMAIL) )  {
			$hiba = "Hibás e-mail címet, vagy jelszót adtál meg!";
		}
		else {
			//sikeres
			if ($email == "jancsi@gmail.com" && $jelszo == "juliska") {
				$_SESSION['belepett'] = true;
				header("Location: lista.php");
			}
			else {
				//sikertelen
				$hiba = "Hibás e-mail címet, vagy jelszót adtál meg!";
			}
		}
			
	/* $jelszo = mysqli_real_escape_string($dbconn, $jelszo) */
	
}

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
    <h1>Belépés</h1>
    <form method="post" action="">
	<?php if (isset($hiba)) print $hiba; ?>
		<p><label for="email">E-mail:*</label><br>
		<input type="email" id="email" name="email" required></p>
		<p><label for="jelszo">Jelszó:*</label><br>
		<input type="password" id="password" name="jelszo" required></p>
		<p><em>A *-gal jelölt mezők kitöltése kötelező!</em></p>
		<input type="submit" id="rendben" name="rendben" value="Belépés">
	</form>
</body>
</html>
