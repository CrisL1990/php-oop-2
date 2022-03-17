<?php

    class Prodotto{

        private $name;
        protected $price;
        protected $rating;
        protected $description;

        //Richiede obbligatoriamente il nome del prodotto per poterlo istanziare
        public function __construct($name)
        {
            $this->name = $name;
        }

        //Verifica che il prezzo sia un numero oiù grande di 0
        public function setPrice($price){
            if(is_numeric($price) && $price > 0){
               $this->price = $price;
            }
            else{
                $this->price = 'price must be a number above 0';
            }
        }

        //Assegna a price il valore inserito in setPrice
        public function getPrice(){
            return $this->price;
        }

        //Verifica che il valore di rating sia un numero compreso tra 0 e 10
        public function setRating($rating){

            if(is_numeric($rating) && $rating >= 0 && $rating <= 10){
                $this->rating = $rating;
            }
            else{
                $this->rating = 'Rating must be a number between 0 an 10';
            }
        }

        //Assegna a rating il valore di setRating
        public function getRating(){
            return $this->rating;
        }

        //Crea una versione ridotta della descrizione se essa supera un certo numero di caratteri
        public function setDescription($description){

            $descriptionCutted = substr($description, 0, 20) . '...';
            
            $this->description = $descriptionCutted;
        }

        //Assegna la descrizione ridotta
        public function getDescription(){
            return $this->description;
        }
    }
?>