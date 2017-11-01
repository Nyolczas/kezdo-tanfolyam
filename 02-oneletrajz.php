<?php
//személyes adatok
$nev            = "Nyolczas István";
$eletkor        = 42;
$foglalkozas    = "webfejlesztő, grafikus, befektető";
$lakhely        = "Budapest";

// Önéletrajz megjelenítése
$kimenet = "<p> A nevem: {$nev}. {$eletkor} éves vagyok. Foglalkozásom: {$foglalkozas}. 
A hely ahol élek: {$lakhely}</p>";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php print $kimenet; ?>
</body>
</html>
