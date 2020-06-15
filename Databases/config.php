<?php

    $dbHost = 'localhost';
    $dbName = 'cursoPHP';
    $dbUser = 'root';
    $dbPass = '';
    try {
        //Connection PDO
        //PDO("typeOfDatabase:host = ip / localhost;dbname = name", "user", "password")
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        //Launch an exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e) {
        echo $e->getMessage();
    }
?>