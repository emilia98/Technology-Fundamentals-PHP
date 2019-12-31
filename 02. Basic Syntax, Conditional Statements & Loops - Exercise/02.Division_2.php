<?php
    $number = intval(readline());
    $dividers = array(10, 7, 6, 3, 2);

    for($i = 0; $i < count($dividers); $i++) {
        $divider = $dividers[$i];

        if($number % $divider == 0) {
            printf("The number is divisible by %d", $divider);
            return;
        }
    }

    echo "Not divisible";