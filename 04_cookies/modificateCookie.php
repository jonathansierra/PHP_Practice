<?php
    $value = $_COOKIE['count'];
    $value++;
    
    //Modify Cookie:
    //setcookie(name, value, time of life)
    setcookie('count', $value);

    echo "<h1>Increase the Cookie value: 1</h1>";
?>