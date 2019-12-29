<?php
    $country = readline();
    $countries = array(
      "England" => "English",
      "USA" => "English",
      "Spain" => "Spanish",
      "Argentina" => "Spanish",
      "Mexico" => "Spanish"
    );

    if(array_key_exists($country, $countries))
        echo $countries[$country];
    else
        echo "unknown";