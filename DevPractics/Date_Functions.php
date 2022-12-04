<?php 

    # --  date() -- #
    # It will Used to specifiy the formate for date.
    # By default it will print date of current unit timestamp with date fomate specified in date() function.
    echo date("d-m-Y") . "\n";
    echo date("D-M-Y") . "\n";

    # -- getdate() -- #
    $arr =  getdate();
    foreach ($arr As $key => $value) {
        echo $key . " = " . $value . "\n";
    }

    # -- checkdate() -- #
    echo checkdate(12, 12, 12) . "\n";

    # -- time() -- #
    echo time() . "\n";

    # -- mktime() -- #
    echo mktime(12, 12, 12, 12, 12, 12);
?>