<?php
    $i = 1;

    do {
        if($i % 3 == 0)
            echo $i.PHP_EOL;

        $i++;
    }
    while($i <= 100);