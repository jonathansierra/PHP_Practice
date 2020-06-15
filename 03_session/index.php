<?php
    //Start a session
    session_start();

    //Also notice that all session variable values are stored in the global $_SESSION variable:
    $_SESSION['count'] = 0;

    echo "<h1>Home</h1>";
?>