<?php

    require_once __DIR__ . '/Prodotto.php';

    class Gioco extends Prodotto{

        public $toyType;
        public $color;
        public $animalSize;

        private $sizes = ['XS', 'S', 'MD', 'L', 'XL', 'XXL'];

        public function __construct($name, $toyType)
        {
            parent::__construct($name);
            $this->toyType = $toyType;
        }

        public function getSize($mySize){

            strtoupper($mySize);

            if(in_array($mySize, $this->sizes, false) == true){
                $this->animalSize = $mySize;
            }
            else{
                $this->animalSize = 'Possible values are XS, S, MD, L, XL, XXL';
            }
        }

        public function setSize(){
            return $this->animalSize;
        }

        



    }
?>