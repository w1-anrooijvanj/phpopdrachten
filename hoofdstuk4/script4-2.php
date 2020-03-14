<?php
//Modelleren, meneer Gijsbrechts
//Javascript, meneer van de Wetering
//Database SQL, meneer van de Wetering
//PHP, meneer Evers
//ASP, meneer van Meer
//Digitale vaardigheden, mevrouw Pielage
//Nederlands, meneer van den Ende
//Engels, mevrouw Mitrovic
//Rekenen, mener van Meer
//Burgerschap, mevrouw de Ruiter

$courseName = "PHP";

switch ($courseName){
    case "PHP":
        $teacherName = "meneer Evers";
        break;
    case "Modelleren":
        $teacherName = "meneer Gijsbrechts";
        break;
    case "Javascript":
        $teacherName = "meneer van de Wetering";
        break;
    case "Database SQL":
        $teacherName = "meneer van de Wetering";
        break;
    case "ASP":
        $teacherName =  "meneer van Meer";
        break;
    case "Digitale vaardigeheden":
        $teacherName = "mevrouw Pielage";
        break;
    case "Nederlands":
        $teacherName = "meneer van den Ende";
        break;
    case "Engels":
        $teacherName = "mevrouw Mitrovic";
        break;
    case "Rekenen":
        $teacherName = "meneer van Meer";
        break;
    case "Burgerschap":
        $teacherName = "mevrouw de Ruiter";
        break;
    default:
        $teacherName = " ";
}

echo 'Voor het vak <span style="font-weight: bold;">'.$courseName.'</span> heb je <span style="font-weight: bold;">'.$teacherName.'</span> als docent.';