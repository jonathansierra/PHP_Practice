<?php

    namespace Vehicle;

    require_once 'VehicleBase.php';

    class Car extends VehicleBase {
        public function move() {
            echo 'Car: moving <br>';
        }
    }