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
    $ora = 11;

    if($ora <= 10){
        print "Jó reggelt!";
    }
    elseif ($ora < 18) {
        print "Jó napot!";
    }
    else {
        print "Jó estét!";
    }
    ?>
</body>
</html>