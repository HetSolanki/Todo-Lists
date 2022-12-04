<?php 

    # -- Indexed/Numeric Array -- #
    $arr = array(1, 2, 3);
    
    foreach($arr as $value) {
        echo $value . " ";
    }
    echo "\n";

    # Accosiative Array -- #
    $arr1 = array('emp1' => 5000, 'emp2' => 10000);
    foreach($arr1 as $key => $value) {
        echo $key . " " . $value . "\n";
    }

    # -- Accosiative Array With For Loop 

    $key = array_keys($arr1);

    for ($i=0; $i < count($key); $i++) { 
        $index = $key[$i];
        echo $arr1[$index] . "\n";
    }
?>