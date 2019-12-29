<?php
    $stop = intval(readline());
    $sum = 0;

    for($i = 1; $i <= $stop * 2 - 1; $i += 2) {
        echo $i.PHP_EOL;
        $sum += $i;
    }

    echo "Sum: ".$sum;