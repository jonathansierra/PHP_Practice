<?php

    //Indexed Array
    echo "<h1>Indexed Array</h1>";
    $arrayVar1 = ['red', 'blue', 'black', 'white'];
    var_dump($arrayVar1);
    echo "<br>";

    //Access to the value
    var_dump($arrayVar1[3]);
    echo "<br>";
    var_dump($arrayVar1[0]);

    /************************************************/
    
    //Associative Array
    echo "<h1>Associative Array</h1>";
    $arrayVar2 = [
        'color1' => 'red',
        'color2' => 'blue',
        'color3' => 'black',
        4 => 'white'
    ];
    var_dump($arrayVar2);
    echo "<br>";

    //Access to the value

    var_dump($arrayVar2[4]);
    echo "<br>";
    var_dump($arrayVar2['color3']);
?>