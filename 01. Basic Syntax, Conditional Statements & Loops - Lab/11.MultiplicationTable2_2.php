<?php
    $number = intval(readline());
    $multiplier = intval(readline());

    if($multiplier <= 10) {
        $i = $multiplier - 1;
        while (++$i <= 10)
            echo $number . " X " . $i . " = " . ($number * $i) . PHP_EOL;
    }
    else
        echo $number." X ".$multiplier." = ".($number * $multiplier).PHP_EOL;