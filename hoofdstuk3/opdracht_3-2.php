<?php
include "../includes/header.php";
echo '<h3>Deel 1</h3>';
$trafficLightColor = "groen";
$ambulanceComing = false;
$driveOn = true;

if($ambulanceComing==true){
    $driveOn = false;
} else if($trafficLightColor=="rood" || $trafficLightColor=="oranje"){
    $driveOn = false;
} else {
    $driveOn = true;
}
if($driveOn==true){
    echo '<p style="color:green">U mag doorrijden</p>';
} else {
    echo '<p style="color:red">U moet stoppen</p>';
};

echo '<h3>Deel 2</h3>';
$countryName = "Cyprus";
$currentAge = 17;
echo 'Je woont in '.$countryName.' en je bent '.strval($currentAge).' jaar oud.';
if($countryName=="België" and $currentAge<16){
    echo '<p>Je mag hier geen alcohol drinken.</p>';
} else if($countryName=="België" && $currentAge<18){
    echo '<p>Je mag hier zwakke alcohol drinken.</p>';
} else if($countryName=="België" and $currentAge>=18){
    echo '<p>Je mag hier alle alcohol drinken.</p>';
} else if($countryName=="Bulgarije" and $currentAge<18){
    echo '<p>Je mag hier geen alcohol drinken.</p>';
} else if($countryName=="Bulgarije" and $currentAge>=18){
    echo '<p>Je mag hier alle alcohol drinken.</p>';
} else if($countryName=="Cyprus" and $currentAge<17){
    echo '<p>Je mag hier geen alcohol drinken.</p>';
} else if($countryName=="Cyprus" and $currentAge>=17){
    echo '<p>Je mag hier alle alcolhol drinken.</p>';
} else if($countryName=="Nederland" and $currentAge<18){
    echo '<p>Je mag hier geen alcohol drinken.</p>';
} else if($countryName== "Nederland" and $currentAge>=18){
    echo '<p>Je mag hier alle alcohol drinken.</p>';
} else if($countryName=="Zweden" and $currentAge<18){
    echo '<p>Je mag hier geen alcohol drinken.</p>';
} else if($countryName=="Zweden" and $currentAge<20){
    echo '<p>Je mag hier zwakke alcohol drinken.</p>';
} else if($countryName=="Zweden" and $currentAge>=20){
    echo '<p>Je mag hier alle alchohol drinken.</p>';
}
include "../includes/footer.php";
?>