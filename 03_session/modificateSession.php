<?php
    //Always must initialize the session
    session_start();

    //We modificate the variable count
    $_SESSION['count']++;

    echo "<h1>Modificate Session</h1>";
?>