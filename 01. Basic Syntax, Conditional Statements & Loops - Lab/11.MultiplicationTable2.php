<?php
    $number = intval(readline());
    $multiplier = intval(readline());

    $start = $multiplier;
    $end = 10;

    if($multiplier > 10) {
        $end = $multiplier;
    }

    for($i = $start; $i <= $end; $i++) {
        printf("%d X %d = %d%s", $number, $i, $number * $i, PHP_EOL);
    }