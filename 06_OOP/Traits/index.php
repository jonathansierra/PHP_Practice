<?php

    use Vehicle\{Car, Truck, ToyCar};
    require_once 'Car.php';

    echo '<h1>Class Car</h1>';
    $car = new Car('Geovani');
    $car->move();
    //We access to the method 
    echo 'GPS pos: ' . $car->getPos();