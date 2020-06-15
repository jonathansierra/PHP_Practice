<?php
    require_once 'Car.php';

    use Vehicle\{Car, Truck};

    echo '<h1>Class Car</h1>';

    $car = new Car("Jonathan");
    $car->move();

    //Serialize
    $ser = serialize($car);
    //Unserialize
    $newCar = unserialize($ser);

    echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';