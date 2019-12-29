<?php
    $stop = intval(readline());
    $i = 1;
    $loops = 1;
    $sum = 0;

    while($loops <= $stop) {
        echo $i.PHP_EOL;
        $loops++;
        $sum += $i;
        $i += 2;
    }

    echo "Sum: ".$sum;