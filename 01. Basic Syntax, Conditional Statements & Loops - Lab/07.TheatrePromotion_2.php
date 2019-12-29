<?php
    $typeOfDay = readline();
    $age = intval(readline());

    $prices = array(
        "Weekday" => array(
            "cat1" => 12,
            "cat2" => 18,
            "cat3" => 12
        ),
        "Weekend" => array(
            "cat1" => 15,
            "cat2" => 20,
            "cat3" => 15
        ),
        "Holiday" => array(
            "cat1" => 5,
            "cat2" => 12,
            "cat3" => 10
        ),
    );

    if($age < 0 || $age > 122) {
        echo "Error!";
        return;
    }

    $ageCategory = "";

    if($age >= 0 && $age <= 18)
        $ageCategory = "cat1";
    else if($age > 18 && $age <= 64)
        $ageCategory = "cat2";
    else if($age > 64 && $age <= 122)
        $ageCategory = "cat3";

    echo $prices[$typeOfDay][$ageCategory]."$";