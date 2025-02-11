<?php

    class Car{
        public int $evjarat;
        public string $szin;
        private string $marka;
        
        public function __construct(
            string $marka, 
            string $szin, 
            int $evjarat
        ){
            $this->marka = $marka;
            $this->szin = $szin; 
            $this->evjarat = $evjarat;  
        }

        public function setMarka(string $marka) : void
        {
            $this->marka = $marka;
        }

        public function AddModal(string $modal): void
        {
            $this->marka .= " $modal";
        }
    }

