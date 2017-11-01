<?php
$kimenet = "<table style=\"border:solid 2px black\">\n";
    for ($sor=1; $sor<=10; $sor++) {
        $kimenet.= "\t<tr>\n";
        for ($oszlop=1; $oszlop<=10; $oszlop++) {
            $kimenet.= "\t\t<td>".($sor*$oszlop)."</td>\n";
        }
        $kimenet.= "\t</tr>\n";
    }
    $kimenet.="</table>\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szorzótábla</title>
</head>
<body>
    
        <?php print $kimenet; ?>
    
</body>
</html>