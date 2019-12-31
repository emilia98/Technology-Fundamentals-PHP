<?php
    $peopleCount = intval(readline());
    $groupType = readline();
    $day = readline();

    $pricesByGroups = array(
        "Students" => array(
            "Friday" => 8.45,
            "Saturday" => 9.80,
            "Sunday" => 10.46
        ),
        "Business" => array (
            "Friday" => 10.90,
            "Saturday" => 15.60,
            "Sunday" => 16
        ),
        "Regular" => array (
            "Friday" => 15,
            "Saturday" => 20,
            "Sunday" => 22.50
        )
    );

    $totalPrice = 0;
    $priceForPerson = 0;

    if(array_key_exists($groupType, $pricesByGroups) && array_key_exists($day, $pricesByGroups[$groupType])) {
        $priceForPerson = $pricesByGroups[$groupType][$day];
    }
    else {
        echo "Invalid Input";
        return;
    }

    $totalPrice = $peopleCount * $priceForPerson;

    if($groupType == "Students" && $peopleCount >= 30) {
        $totalPrice *= 0.85;
    }
    else if($groupType == "Business" && $peopleCount >= 100) {
        $totalPrice -= 10 * $priceForPerson;
    }
    else if($groupType == "Regular" && $peopleCount >= 10 && $peopleCount <= 20) {
        $totalPrice *= 0.95;
    }

    printf("Total price: %.2f", $totalPrice);