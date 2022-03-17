<?php

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Gioco.php';

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




