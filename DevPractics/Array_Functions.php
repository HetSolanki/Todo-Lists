<?php 
    
    function sout($arr) {

        foreach($arr as $value) {
            echo $value . " ";
        }
        echo "\n";
    }
    $arr = array("emp1" => 5000, 1, 2, 3);
    sout($arr);

    # -- Insertion -- #
    array_push($arr, 10, 20);
    $arr[] = 100;

    # -- Deletion -- #
    unset($arr[3]);
    $i = array_pop($arr);
    echo $i . "\n";
    sout($arr);    

    # -- Search -- #
    echo array_key_exists("emp1", $arr);
    sout($arr);
    echo array_search(5000, $arr);

    sort($arr);
    sout($arr);
?>