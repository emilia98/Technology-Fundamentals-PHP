<?php
    $hours = intval(readline());
    $minutes = intval(readline());

    $minutes += 30;

    if($minutes > 59) $hours++;

    $minutes = $minutes % 60;
    $hours = $hours % 24;

    echo $hours.":".substr(("0".$minutes), -2);