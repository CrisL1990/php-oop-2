<?php

class creditCard {

    public $name;
    public $lastName;

    protected $year;
    protected $month;

    //protected $now;

    protected $cardNumber;
    protected $expired = false;
    protected $cvv;

    public function __construct($name, $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    //Se il numero è valido setta cvv a tale numero, altrimenti crea una eccezione
    public function setCvv($cvv){
        if(is_numeric($cvv) && strlen($cvv) == 3){
            $this->cvv = $cvv;
        }else{
            $this->cvv = 000;
            throw new Exception('Il numero deve essere un numero intero di tre cifre <br>');
            
        }
    }

    //Se il numero è valido setta cardNumber a tale numero, altrimenti crea una eccezione
    public function setCarsNumber($cardNumber){
        if(strlen($cardNumber) == 16){
            $this->cardNumber = $cardNumber;
        }else{
            $this->cardNumber = 0000000000000000;
            throw new Exception('Il numero deve essere un numero intero di 16 cifre <br>');
        }
    }

    
    public function isExpired(){
        $expired = DateTime::createFromFormat('m-y', $this->month .'-' . $this->year);
        $now = new DateTime();
        
        if($expired < $now){
            $this->expired = true;
            throw new Exception('Expired card');
        }
    }

    public function setDate($month, $year){
        $this->year = $year;
        $this->month = $month;
    }
    


} 