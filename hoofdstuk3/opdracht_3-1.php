<?php
    include "../includes/header.php";
    $evenement = "Elfstedentocht";
    $dialect = "Alvestêdetocht";
    $aantalKm = 200;
    $watIsHet = "schaatstocht";
    $waarover = "natuurijs";
    $organisatie = "de Koninklijke Vereniging De Friesche Elf Steden";
    $startAankomstPlaats = "Leeuwarden";
    $startsAankomstProvincie = "Friesland";
    $hoevaakTotaal = 15;
    $eersteKeer = 1909;
    $hoevaakPWinter = 1;
    $verhaal = "De ".$evenement." (Fries: ".$dialect." ) is een ".$aantalKm." kilometer
                lange ".$watIsHet." over ".$waarover." die wordt georganiseerd door ".$organisatie.". ".$startAankomstPlaats.",
                de hoofdstad van ".$startsAankomstProvincie.", is start- en aankomstplaats. De ".$evenement." is
                inmiddels ".$hoevaakTotaal." maal verreden en werd voor het eerst in ".$eersteKeer." gereden en
                wordt maximaal ".$hoevaakPWinter." keer per winter gehouden.";
    echo "<p>".$verhaal."</p>";
    include "../includes/footer.php";
?>
