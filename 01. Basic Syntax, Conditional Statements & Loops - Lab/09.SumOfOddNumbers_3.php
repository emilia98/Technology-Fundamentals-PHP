<?php
    $stop = intval(readline());
    $i = 1;
    $sum = 0;

    do {
        if($i % 2 == 1) {
            echo $i.PHP_EOL;
            $sum += $i;
        }

        $i++;
    }
    while($i <= $stop * 2 - 1);

    echo "Sum: ".$sum;