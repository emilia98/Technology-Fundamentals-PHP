<?php
    $hours = intval(readline());
    $minutes = intval(readline());

    $minutes += 30;

    if($minutes > 59) {
        $hours++;
        $minutes = $minutes - 60;
    }

    if($hours > 23) {
        $hours = 24 - $hours;
    }

    printf("%d:%02d", $hours, $minutes);