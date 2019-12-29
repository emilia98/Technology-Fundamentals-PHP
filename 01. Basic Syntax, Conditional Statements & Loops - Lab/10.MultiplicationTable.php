<?php
    $number = intval(readline());

    for($i = 1; $i <= 10; $i++) {
        printf("%d X %d = %d\n", $number, $i, $number * $i);
    }