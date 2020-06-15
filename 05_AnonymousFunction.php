<?php

    echo "<h1>Example 1:</h1>";
    /*Anonymous function assigned to a variable */

    $var2 = 1;
    $var = function() use ($var2) {
        echo "Anonymous function <br>";
        //If we didn't use the keyword "use", PHP give us an error,
        //because the variable $var2 wasn't declared, because the "scope" lost in this context
        echo "Value: " . $var2;
    };

    $var();

    /*Anonymous function passed as a parameter*/

    $x = 3;
    echo "<h1>Example 2:</h1>";
    $numbers = [1, 2, 3, 4, 5];
    $closure = function($n) use ($x) {
        return $n * $x;
    };

    //We can't assign a new valor to the variable $x, because in lines above we define the value of $x
    $x = 4; //The value for the function array_map will be 3 not 4

    //array.map(callback, array)
    $result = array_map($closure, $numbers);

    var_dump($result);
?>