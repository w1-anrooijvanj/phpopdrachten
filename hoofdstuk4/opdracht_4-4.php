<?php
include "../includes/header.php";

$dagNamen = array("zondag", "maandag", "dinsdag", "woensdag", "donderdag",
    "vrijdag", "zaterdag");
for ($tel = 0; $tel < 7; $tel++) {
    $datumAlsGetal = strtotime("+".$tel." days");
    $dagVanDeWeek = date("w",$datumAlsGetal);
    echo "Dag ".$dagVanDeWeek." is ".$dagNamen[$dagVanDeWeek]." ".date("d-m-Y",$datumAlsGetal)."</br>";
}

include "../includes/footer.php";