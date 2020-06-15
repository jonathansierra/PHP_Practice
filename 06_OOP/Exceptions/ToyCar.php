<?php

    namespace Vehicle;

    require_once 'VehicleBase.php';
    class ToyCar extends VehicleBase {
        public function move() {
            echo $this->startEngine() . '<br>';
            echo 'Car: moving <br>';
        }

        public function startEngine() {
            //throw a exception
            throw new \Exception('Engine not found');
        }
    }