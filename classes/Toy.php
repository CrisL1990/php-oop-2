<?php

    require_once __DIR__ . '/Procuct.php';

    class Toy extends Product{

        public $toyType;
        public $color;
        public $animalSize;

        public function __construct($name, $toyType)
        {
            parent::__construct($name);
            $this->toyType = $toyType;
        }

        



    }
?>