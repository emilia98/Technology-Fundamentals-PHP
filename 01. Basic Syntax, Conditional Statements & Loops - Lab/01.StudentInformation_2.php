<?php
    $name = readline();
    $age = intval(readline());
    $grade = floatval(readline());

    echo "Name: ".$name.", Age: ".$age.", Grade: ".sprintf("%.2f", $grade);