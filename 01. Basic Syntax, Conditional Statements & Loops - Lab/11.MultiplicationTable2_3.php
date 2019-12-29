<?php
    $number = intval(readline());
    $multiplier = intval(readline());

    if($multiplier >= 10) {
        printf("%d X %d = %d%s", $number, $multiplier, $number * $multiplier, PHP_EOL);
        return;
    }

    $i = $multiplier;

    do
        printf("%d X %d = %d%s", $number, $i, $number * $i, PHP_EOL);
    while(++$i <= 10);