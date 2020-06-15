<?php
    //Destroy the cookie
    //We put a time past
    setcookie('count', null, time() - 1 );

    echo "<h1>Destroy the cookie</h1>";
?>