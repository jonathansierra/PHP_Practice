<?php

    namespace Vehicle;
    
    class VehicleBase {
        protected $owner;
    
        public function __construct($owner) {
            $this->owner = $owner;
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