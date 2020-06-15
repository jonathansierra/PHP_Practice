<?php

    use Vehicle\{Car, Truck, ToyCar};
    require_once 'ToyCar.php';

    //Handle the exception
    try {
        echo '<h1>Class ToyCar</h1>';

        $toyCar = new ToyCar("Jonathan");
        $toyCar->move();
    } catch(Exception $e) {
        echo 'This is a toy';
        //Finally it is a code that is executed whether or not the exception is used
    } finally { //Always will be executed
        echo '<br>Finally';
    }