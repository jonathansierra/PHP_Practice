<?php
    require_once 'Car.php';
    require_once 'Truck.php';

    use Vehicle\{Car, Truck};

    echo '<h1>Class Car</h1>';

    $car = new Car("Jonathan");
    $car->move();

    echo '<h1>Class Truck</h1>';

    $truck = new Truck("Geovani", "Pick-up");
    $truck->move();