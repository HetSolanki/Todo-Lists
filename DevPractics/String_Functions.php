<?php 

    # -- chr() -- #
    echo chr(65) . "\n";

    # -- obr() -- #
    echo ord("Hello") . "\n";
    echo ord('A') . "\n";

    # -- trim() -- #
    echo trim(" Hello ") . "\n";

    # -- ltrim() -- #
    echo ltrim(" Hello ") . "\n";

    # -- rtrim() -- #
    echo rtrim(" Hello ") . "\n";

    # -- substr() -- #
    echo substr("Hello", 0, 2) . "\n";
    echo substr("Hello", 0) . "\n"; # upto end

    # -- strpos() -- #
    echo strpos("Hello", "H") . "\n";
    echo strpos("Hello", "H", 2) . "\n";

    # -- strrev() -- #
    echo strrev("Hello") . "\n";
    
    # -- strstr() -- # Case Sensitive
    echo strstr("Hello world hello", "Hello") . "\n";
    
    # -- stristr() -- # Case Insesitive
    echo stristr("Hello world hello", "hello") . "\n";
    echo stristr("Hello world hello", "Hello") . "\n";
    
    # -- str_replace() -- # 
    echo str_replace("Hello", "ollhe", "Hello World", $i) . "\n";
    echo $i . "\n"; # $i is Number of replacement(s) made by this function.

    # -- strcmp() -- #
    echo strcmp("Hello", "Hello") . "\n"; # Both Are Equal --> 0
    echo strcmp("Hello", "hello") . "\n"; # str1 < str2 --> -1
    echo strcmp("hello", "Hello") . "\n"; # str1 > str2 --> 1




?>