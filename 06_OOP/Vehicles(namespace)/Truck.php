<?php

    namespace Vehicle;

    require_once 'VehicleBase.php';

    class Truck extends VehicleBase {
        private $type;

        public function __construct($owner, $type) {
            $this->type = $type;

            /*
            If the variable was declarated with "private"
            //call the father constructor
            parent::__construct($owner);
            */

            //If the variable was declarated with "protected"
            $this->owner = $owner;
        }

        public function move() {
            echo 'Truck ' . $this->type . ': moving <br>';
        }
    }