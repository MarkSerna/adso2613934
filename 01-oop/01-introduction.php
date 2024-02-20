<?php
    # Linear Programming

    $num1 = 54;
    $num2 = 32;

    echo "{$num1} * {$num2} = ". $num1 * $num2;

    echo "<br>";

    $string = "Hello";
    echo "MD5({$string}) = " . md5('$string');
    echo "<br>";
    echo "PASSWORD_HASH({$string}) = " . password_hash($string, PASSWORD_DEFAULT);
    echo "<br>";
    $hash = password_hash($string, PASSWORD_DEFAULT);

    if(password_verify($string, $hash)){
        echo "Verified Successfully";
    }

    # Structured Programming
    # Object Oriented Programming

?>