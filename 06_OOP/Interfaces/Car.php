<?php

    namespace Vehicle;

    require_once 'VehicleBase.php';

    //we use the keyword implements
    //We use the keyword "\" when want to specify that this class / interface
    //don't belong to the current namespace
    class Car extends VehicleBase implements \Serializable {
        public function move() {
            echo $this->startEngine() . '<br>';
            echo 'Car: moving <br>';
        }

        public function startEngine() {
            return 'Car: start engine';
        }

        public function serialize() {
            echo 'Serialize <br>';
            return $this->owner;
        }

        public function unserialize($serialized) {
            echo 'Unserialized <br>';
            $this->owner = $serialized;
        }
    }