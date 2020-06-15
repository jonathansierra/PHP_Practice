<?php

    namespace Vehicle;

    require_once 'VehicleBase.php';

    class Truck extends VehicleBase {
        private $type;

        public function __construct($owner, $type) {
            $this->type = $type;
            $this->owner = $owner;
        }

        public function startEngine() {
            return 'Truck: start engine';
        }
    }