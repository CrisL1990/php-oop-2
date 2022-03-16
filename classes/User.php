<?php

    class User{

        public $name;
        public $lastName;
        public $email;
        public $discount = 0;

       

        public function __construct($name, $lastName, $email)
        {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->email = $email;
        }

        
    }
?>