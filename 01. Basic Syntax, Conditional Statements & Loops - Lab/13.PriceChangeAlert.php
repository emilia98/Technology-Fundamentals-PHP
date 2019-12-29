<?php
    $n = intval(readline());
    $significanceThreshold = floatval(readline());

    $previous = floatval(readline());
    for ($i = 0; $i < $n - 1; $i++) {
        $current = floatval(readline());
        $div = ($current - $previous) / $previous;
        $isSignificantDifference = abs($div) >= $significanceThreshold;

        $result = "";
        if ($div == 0) {
            $result = "NO CHANGE: " . $current;
        } else if (!$isSignificantDifference) {
            $result = sprintf("MINOR CHANGE: %f to %f (%.2f%%)", $previous, $current, $div * 100);
        } else if ($isSignificantDifference && ($div > 0)) {
            $result = sprintf("PRICE UP: %f to %f (%.2f%%)", $previous, $current, $div * 100);
        } else if ($isSignificantDifference && ($div < 0)) {
            $result = sprintf("PRICE DOWN: %f to %f (%.2f%%)", $previous, $current, $div * 100);
        }

        echo $result . PHP_EOL;
        $previous = $current;
    }