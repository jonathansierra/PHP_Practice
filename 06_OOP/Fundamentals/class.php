<?php

class Car {
    private $owner = "Geovani";

    public function move() {
        echo 'moving <br>';
    }

    public function getOwner() {
        return $this->owner;
    }

    public function setOwner($owner) {
        $this->owner = $owner;
    }
}

echo '<h1>Class Car</h1>';

$car = new Car();
$car->move();
$car->setOwner("Jonathan");

$car2 = new Car();
$car2->setOwner("Geovani");

echo "Owner1: " . $car->getOwner() . "<br>";
echo "Owner2: " . $car2->getOwner() . "<br>";