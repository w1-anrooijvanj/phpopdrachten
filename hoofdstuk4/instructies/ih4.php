<?php
/*
 *Instructie date() en elseif statement
 */


    /*incase timezone is wrong*/
    date_default_timezone_set("Europe/Amsterdam");
    /*day month year, hour minute*/
    echo date("d-m-Y H:i");
    /*Monday*/
    $day = date("l");
    if($day == "Monday")
    {
        echo "Het is de eerste dag van de week";
    }
    elseif ($day == "Tuesday")
    {
        echo "Het is vandaag ".$day;
    }