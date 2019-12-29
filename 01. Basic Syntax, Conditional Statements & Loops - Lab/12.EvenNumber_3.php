<?php
    $number = intval(readline());

    do {
        if($number % 2 == 0) {
            printf("The number is: %d", abs($number));
            break;
        }

        echo "Please write an even number.".PHP_EOL;
    }
    while($number = intval(readline()));