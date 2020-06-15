<?php
    //Create a cookie
    //setcookie(name, value, time of life);
    setcookie('count', '1', time() + 3600);
    echo "<h1>Create Cookie</h1>";
?>