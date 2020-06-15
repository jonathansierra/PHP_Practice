<?php
    //Always must initialize the session
    session_start();

    echo "<h1>Count Result: </h1>" . $_SESSION['count'];
?>