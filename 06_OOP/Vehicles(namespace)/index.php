<?php
    require_once 'Car.php';
    require_once 'Truck.php';

    //call the namespace
    //Grouping of classes that belong to the same namespace; we can use:
    //use namespace\{ClassName, ClassName, ...}
    use Vehicle\{Car, Truck};

    echo '<h1>Class Car</h1>';

    $car = new Car("Jonathan");
    $car->move();
    echo "Owner Car: " . $car->getOwner() . "<br>";

    echo '<h1>Class Truck</h1>';

    $truck = new Truck("Geovani", "Pick-up");
    $truck->move();
    echo "Owner Truck: " . $truck->getOwner() . "<br>";
?>