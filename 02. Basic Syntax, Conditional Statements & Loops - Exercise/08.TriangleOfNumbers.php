<?php
    $n = intval(readline());

    for($row = 1; $row <= $n; $row++) {
        $digit = $row;
        for($col = 1; $col <= $row; $col++) {
            $result = $digit;

            if($col < $row)
                $result = $result." ";

            echo $result;
        }
        echo PHP_EOL;
    }