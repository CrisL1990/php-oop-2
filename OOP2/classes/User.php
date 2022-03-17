<?php

require_once __DIR__ . '/../traits/address.php';

class User {

    use address;

    public $name;
    public $lastName;
    protected $email;

    protected $discount;

    protected $username;
    protected $password;

    protected $logged = false;
    

    public function __construct($name, $lastName, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;

        if(strpos($email, '@') != false && strpos($email, '.') != false){
            $this->email = $email;
        }else{
            echo 'email non valida!';
        }


    }

    public function setLogin($userName, $password){

        if($userName != '' && $password != ''){
            $this->username = $userName;
            $this->password = $password;

            $this->logged = true;
            $this->discount = 20;

        }

    
    }

    public function getDiscount(){
        return $this->discount;
    }

}