<?php
    $start = intval(readline());
    $end = intval(readline());
    $sum = 0;

    for($i = $start; $i <= $end; $i++) {
        if($i == $end)
            echo $i.PHP_EOL;
        else
            echo $i." ";

        $sum += $i;
    }

    echo "Sum: ".$sum;