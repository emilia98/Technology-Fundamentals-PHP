<?php
    $month = intval(readline());
    $months = array(
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
    );

    if($month < 1 || $month > 12)
        echo "Error!";
    else
        echo $months[$month - 1];