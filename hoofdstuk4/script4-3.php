<?php
$task2 = "Lancering in:";
$counter = 19;
while($counter >= 0){
    $task2 = $task2 . strval($counter) . ",";
    $counter--;
}
$task3 = "Lancering in:";
for($counter = 20; $counter >= 0; $counter--){
    $task3=$task3.strval($counter).",";
    $counter--;
}
$task4 = " ";
$count = 1;
while($count <= 6){
    $task4 = $task4.'<h'.$count.'>Dit is de '.$count.'e iteratie </h'.$count.'> </br>';
    $count++;
}
$task5= "<table> <tr>";
for($count = 0; $count <= 10; $count++){
    $task5 = $task5. '<td>Dit is de '.$count.'e iteratie</td>';
    $count++;
}
$task5= $task5.'</table> </tr>';

$task6 = " ";
$countyear = 2020;
while($countyear >= 2002){
    if($countyear == 2020){
        $task6=$task6.'<p>In 2020 ben/was ik '.strval($countyear-2002).' jaar oud</p>';
    } else if ($countyear == 2002){
        $task6=$task6.'<p>In 2002 ben ik geboren</p>';
    } else {
        $task6=$task6.'<p>In '.$countyear.' was ik '.strval($countyear-2002).' jaar oud</p>';
    }
    $countyear--;
}
$task7 = " ";
for($countyear = 2020; $countyear >= 2002; $countyear--){
    if($countyear == 2020){
        $task7=$task7.'<p>In 2020 ben/was ik '.strval($countyear-2002).' jaar oud';
    } else if ($countyear == 2002){
        $task7=$task7.'<p>In 2002 ben ik geboren';
    } else {
        $task7=$task7.'<p>In '.$countyear.' was ik '.strval($countyear-2002).' jaar oud';
    }
    if($countyear == 2002){
        $task7 = $task7.' en ik was een baby</p>';
    } else if($countyear == 2004){
        $task7 = $task7.' en ik werd een peuter</p>';
    } else if($countyear == 2006){
        $task7 = $task7.' en ik werd een kleuter</p>';
    } else if($countyear == 2010){
        $task7 = $task7.' en ik werd een tiener</p>';
    } else if($countyear == 2014){
        $task7 = $task7.' en ik werd een puber</p>';
    } elseif ($countyear == 2020){
        $task7 = $task7.' en ik word volwassen</p>';
    }
}


?>