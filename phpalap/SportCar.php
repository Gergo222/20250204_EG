<?php

    include_once 'Car.php';
    class SportCar extends Car{
        private int $kobcenti;

        public function setKobcenti(int $kobcenti): SportCar{
            $this->kobcenti = $kobcenti;
            return $this;
        }

        public function getKobcenti(): int{
            return $this->kobcenti;
        }
    }