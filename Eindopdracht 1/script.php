<?php
//Een array die een value meegeeft aan een key
$combo = array("Jaëlle"=>"123", "Jurre"=>"12345678", "Daniel"=>"00123", "Michelle"=>"t0n0!23", "Max"=>"3dg3hl9",
    "Sharona"=>"hd6d8h", "Bram"=>"vshy5d7", "Vivianne"=>"jhsfd78df6", "Luuk"=>"jheffaui2", "Anne"=>"afhji32");
$message = "";
//zorgt ervoor dat je niet direct op de 2e pagina staat
$correct = false;

//controleert of er een post request is verstuurd (of er op login is geklikt)
if(isset($_POST["password"])) {
    //controleert of username is ingevuld
    if($_POST["username"] == ""){
        //zoniet veranderd hij de lege string bij message naar "Username required"
        $message = "Username required.";
    }
    //controleert of password is ingevuld
    elseif ($_POST["password"] == ""){
        //zoniet veranderd hij de lege string bij message naar "Password required"
        $message = "Password required.";
    } else {
        //loopt door de paren van $combo heen en stored de waarden als username en password
        foreach ($combo as $username => $password) {
            //als deze gelijk zijn verandert hij $correct naar true en laat hij de volgende pagina zien
            if($_POST["username"] == $username && $_POST["password"] == $password){
                $correct = true;
            }
        }
        //zoniet is het password of de username verkeerd en veranderd hij de lege string bij message naar "Incorrect ...."
        if($correct == false){
            $message = "Incorrect username and/or password";
        }
    }
}
