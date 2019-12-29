<?php
    $number = intval(readline());
    $i = 1;

    do {
        printf("%d X %d = %d%s", $number, $i, $number * $i, PHP_EOL);
    }
    while(++$i <= 10);