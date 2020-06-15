<?php
    session_start();

    //Remove all session variables
    session_unset();
    
    //Delete the value of a variable from the session
    unset($_SESSION['count']);
    
    //Delete completely the session and close it in that moment
    session_destroy();
?>