<?php

    require_once __DIR__ . '/classes/Procuct.php';
    require_once __DIR__ . '/classes/Toy.php';

    $prodotto = new Product('gioco');

    $prodotto->setPrice('50');
    $prodotto->getPrice();

    $prodotto->setRating(8);
    $prodotto->getRating();

    $prodotto->setDescription("Il giocattolo è molto ben confezionato e robusto, ma rispetto al kong classico in cui si può spalmare del cibo all'interno (il mio cane lo adora e ci si intrattiene volentieri) questo con le croccette viene un po' snobbato. Allo stesso modo, non so per quale motivo, ma il mio jack russel, che è un'invasata di palline, questo gioco non lo percepisce come una palla...è strano da spiegare, ma è più facile che rubi un'arancia dal cesto della frutta piuttosto che farsi lanciare questa pallina. Di conseguenza, per quanto il gioco sia robusto, non lo ricomprerei.");
    $prodotto->getDescription();

    var_dump($prodotto);


    echo '<br><br>';


    $ball = new Toy('Funny-Ball 2000', 'Ball for dogs');

    $ball->setPrice('15');
    $ball->getPrice();

    $ball->setRating(10);
    $ball->getRating();

    $ball->setDescription("Il giocattolo è molto ben confezionato e robusto, ma rispetto al kong classico in cui si può spalmare del cibo all'interno (il mio cane lo adora e ci si intrattiene volentieri) questo con le croccette viene un po' snobbato. Allo stesso modo, non so per quale motivo, ma il mio jack russel, che è un'invasata di palline, questo gioco non lo percepisce come una palla...è strano da spiegare, ma è più facile che rubi un'arancia dal cesto della frutta piuttosto che farsi lanciare questa pallina. Di conseguenza, per quanto il gioco sia robusto, non lo ricomprerei.");
    $ball->getDescription();

    $ball->color = 'Green';

    var_dump($ball);