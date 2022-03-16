<?php
    require_once __DIR__ . '/User.php';

    class CreditCard extends User{

        private $expireDate;

        public function __construct($name, $lastName, $email, $cardNumber)
        {   
            parent::__construct($name, $lastName, $email);

            if(strlen($cardNumber) == 15){
                $this->myCard = $cardNumber;
            }
            else{
                $this->myCard = 'Invalid credit card number';
            }  
        }

        public function getData($data){
            if($data == 2022){
                $this->expireDate = true;
            }
            else{
                $this->expireDate = false;
            }
        }

        public function setData(){
            return $this->expireDate;
        }

        
 
    }
?>