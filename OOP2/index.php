<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Gioco.php';
require_once __DIR__ . '/classes/creditCard.php';

$newUser = new User('Mario', 'Rossi', 'mario@rossi.it');
$newUser->setLogin('PincoPallo90', 'passwordsegretissima');

$newUser->getDiscount();

var_dump($newUser);

echo '<br><br>';

$newArticle = new Gioco('Gioco per cani', 'Palla magica 2000', 'Pallina per cani');
$newArticle->getSize('L');
$newArticle->setPrice(10);
$newArticle->setRating(8);
$newArticle->setDescription('Palla rimbalzante per cani di grande taglia');
$newArticle->color = 'Verde';

var_dump($newArticle);

echo '<br><br>';

$newCard = new creditCard('Mario', 'Rossi', 'mario@rossi.it');


//Esegue try catch su cvv e lo imposta a 0 se il numero inserito non è un numero intero di 3 cifre
try{
    echo $newCard->setCvv(123);
}catch(Exception $e){
    echo 'Eccezione:' . $e->getMessage();
   
}

//Esegue try catch su cardNumber e lo imposta a 0000000000000000 se il numero inserito non è un numero intero di 16 cifre
try{
    echo $newCard->setCarsNumber(4242424242424242);
}catch(Exception $e){
    echo 'Eccezione:' . $e->getMessage();
}

$newCard->setDate(12, 2023);

try{
    echo $newCard->isExpired();
}catch(Exception $e){
    echo 'Eccezione:' . $e->getMessage();
}



var_dump($newCard);




