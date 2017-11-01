<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $honapok = array("", "Január", "Február", "Március", "Április", "Május", "Június", "Július", 
    "Augusztus", "Szeptember", "Október", "November", "December");
    $het_napjai = array("", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap");
    //print $het_napjai[0];
    print date("Y. ").$honapok[date("n")].date(". j.  ").$het_napjai[date("N")].date(" (W.")."hét)";
    ?>
</body>
</html>