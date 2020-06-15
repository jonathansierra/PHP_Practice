<?php

    namespace Vehicle;

    require_once '../Vehicles(namespace)/VehicleBase.php';

    class Truck extends VehicleBase {
        private static $count = 0;
        private $type;

        public function __construct($owner, $type) {
            $this->type = $type;
            $this->owner = $owner;
            //Access to the variable static
            self::$count++;
        }

        public function move() {
            echo 'Truck ' . $this->type . ': moving <br>';
        }

        public static function getTotal() {
            return self::$count;
        }
    }