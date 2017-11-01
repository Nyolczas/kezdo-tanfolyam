<?php
function koszon() {
    print "Jó napot!<br>";
}

function cimsor($szoveg = "Nem adtál meg címsort!") {
    print "<h1>{$szoveg}</h1>";
}

function negyzetre_emel($szam) {
    return $szam*$szam;
}

koszon();
koszon();
koszon();
koszon();
koszon();
koszon();

cimsor("Ez egy címsor");
cimsor();

$ertek = negyzetre_emel(5);

print $ertek;

cimsor(negyzetre_emel(8));
?>