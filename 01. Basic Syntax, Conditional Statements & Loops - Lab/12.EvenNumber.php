<?php
    $number = intval(readline());

    while(true) {
        if($number % 2 == 0) {
            echo "The number is: ".abs($number);
            return;
        }

        echo "Please write an even number.".PHP_EOL;
        $number = intval(readline());
    }