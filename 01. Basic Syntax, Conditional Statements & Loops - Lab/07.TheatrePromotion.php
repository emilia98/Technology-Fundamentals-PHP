<?php
    $typeOfDay = readline();
    $age = intval(readline());

    if($age < 0 || $age > 122) {
        echo "Error!";
    }

    if($typeOfDay == "Weekday") {
        if( ($age >= 0 && $age <= 18) || ($age > 64 && $age <= 122)) {
            echo "12$";
        }
        else if($age > 18 && $age <= 64) {
            echo "18$";
        }
    }
    else if($typeOfDay == "Weekend") {
        if(($age >= 0 && $age <= 18) || ($age > 64 && $age <= 122)) {
            echo "15$";
        }
        else if($age > 18 && $age <= 64) {
            echo "20$";
        }
    }
    else if($typeOfDay == "Holiday") {
        if($age >= 0 && $age <= 18) {
            echo "5$";
        }
        else if($age > 18 && $age <= 64) {
            echo "12$";
        }
        else if($age > 64 && $age <= 122) {
            echo "10$";
        }
    }