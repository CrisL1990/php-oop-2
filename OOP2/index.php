<?php

require_once __DIR__ . '/classes/User.php';


$newUser = new User('Mario', 'Rossi', 'mario@rossi.it');
$newUser->setLogin('PincoPallo90', 'passwordsegretissima');
$newUser->getDiscount();






var_dump($newUser);