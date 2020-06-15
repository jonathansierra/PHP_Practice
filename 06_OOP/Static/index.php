<?php

    use Vehicle\{Truck};

    require_once 'Truck.php';

    echo '<h1>Class Truck</h1>';

    $truck1 = new Truck("Geovani", "Pick-up");
    $truck1->move();

    echo '<h1>Class Truck</h1>';

    $truck2 = new Truck("Geovani", "Pick-up");
    $truck2->move();

    echo '<h1>Class Truck</h1>';

    $truck3 = new Truck("Geovani", "Pick-up");
    $truck3->move();

    //Access to the variable static that it lives in the Truck class
    echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';
?>