<?php
    $number = intval(readline());
    $i = 0;

    while(++$i <= 10)
        echo $number." X ".$i." = ".($number * $i).PHP_EOL;