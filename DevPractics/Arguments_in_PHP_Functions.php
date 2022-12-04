<?php 

    # -- Pass By Value -- $
    Function greeting($h) {
        echo "Hello " . $h . "\n"; 
    }

    greeting("Het");

    # -- Pass By Reference -- #
    $a = 10;
    Function fun1(&$a) {
        $a = 20;
    }

    echo "Before - A : " . $a . "\n";
    fun1($a);
    echo "After - A : " . $a . "\n";

    # -- Defualt Arguments -- #
    Function default1($a = 10) {
        echo $a . "\n";
    }

    default1(20);
    default1();

    # -- Variable Length Arguments -- #
    function func1() {
        $arr = func_get_args();
        foreach ($arr as $value) {
            echo $value . "\n";
        }
    }

    func1(10);
    func1(10, 20);
    func1(10, 20, 30, "Het");
?>