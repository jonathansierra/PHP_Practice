<?php

class Car {
    private $owner;

    public function __construct($owner) {
        $this->owner = $owner;
    }

    /*PHP call this function when the variables won't be used*/
    public function __destruct() {
        echo "destructor <br>";
    }

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

$car = new Car("Jonathan");
$car2 = new Car("Geovani");
$car->move();

echo "Owner1: " . $car->getOwner() . "<br>";
echo "Owner2: " . $car2->getOwner() . "<br>";