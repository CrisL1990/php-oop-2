<?php

    class User{

        public $name;
        public $lastName;
        public $email;

        public $validCard;
        public $registered;

        public $discount = 0;
        public $canBuy = false;


        //Chiede nome, cognome, email, validità della carta e conferma registrazioneutente quando viene istanziato l'oggetto
        public function __construct($name, $lastName, $email, $registered, $validCard)
        {
            $this->name = $name;
            $this->lastName = $lastName;
            $this->email = $email;

            //Se l'utente è registrato viene applicato lo sconto altrimenti discount resta a 0
            if($registered == true){
                $this->discount = 20;
            }

            //Se la carta è valida l'utente può effettuare il pagamento altrimenti no
            if($validCard == true){
                $this->canBuy = $validCard;
            }
        }



        
    }
?>