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
        $het_napja = 2;

        switch($het_napja) {
            case 1: $nap = "Hétfő"; break;
            case 2: $nap = "Kedd"; break;
            case 3: $nap = "Szerda"; break;
            case 4: $nap = "Csütörtök"; break;
            case 5: $nap = "Péntek"; break;
            case 6: $nap = "Szombat"; break;
            case 7: $nap = "Vasárnap"; break;
            default: $nap = "Nincs ilyen nap";
        }

        print $nap;
    ?>
</body>
</html>