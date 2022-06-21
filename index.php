<?php

require_once __DIR__ . "/product-class/cibo.php";
require_once __DIR__ . "/product-class/giochi.php";
require_once __DIR__ . "/product-class/cucce.php";
require_once __DIR__ . "/user-class/registration.php";

// GIOCHI
$pallaCane = new Gioco("Gioco", "Cane", "Palla", "20 euro");
$frisbeeCane = new Gioco("Gioco", "Cane", "Frisbee", "30 euro");
$pallaGatto = new Gioco("Gioco", "Gatto", "Palla", "10 euro");
$topoGatto = new Gioco("Gioco", "Gatto", "Topo", "25 euro");

// CUCCE
$cucciaCane = new Cuccia("Cuccia", "Cane", "Cuccia morbida", "25 euro");
$casaCane = new Cuccia("Cuccia", "Cane", "Casa in legno", "50 euro");
$cucciaGatto = new Cuccia("Cuccia", "Gatto", "Cuscino morbido", "10 euro");
$casaGatto = new Cuccia("Cuccia", "Gatto", "Castello", "40 euro");

// CIBO
$crocchetteCani = new Cibo("Cibo", "Cani", "Crocchette", "10 euro");
$umidoCani = new Cibo("Cibo", "Cani", "Umido", "15 euro");
$crocchetteGatti = new Cibo("Cibo", "Gatti", "Crocchette", "20 euro");
$umidoGatti = new Cibo("Cibo", "Gatti", "Umido", "25 euro");

// UTENTI
$francesco = new Registration("Francesco", "Cataletto", 1, 40, 1);
$stefano = new Registration("Stefano", "Corradi", 0, 60, 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-oop-2</title>
</head>
<body>
    <h2>PRODOTTI CANI</h2>
    <div class="animal-box">
        <div>
            <div class="prodotto cane">
                <p>Tipologia: <?php echo $crocchetteCani->getType()?></p>
                <p>Per: <?php echo $crocchetteCani->getAnimal()?></p>
                <p>Varietà: <?php echo $crocchetteCani->getfoodType()?></p>
                <p>Prezzo: <?php echo $crocchetteCani->getfoodPrice()?></p>
            </div>
            <div class="prodotto cane">
                <p>Tipologia: <?php echo $umidoCani->getType()?></p>
                <p>Per: <?php echo $umidoCani->getAnimal()?></p>
                <p>Varietà: <?php echo $umidoCani->getfoodType()?></p>
                <p>Prezzo: <?php echo $umidoCani->getfoodPrice()?></p>
            </div>
        </div>
        <div>
            <div class="prodotto cane">
                <p>Tipologia: <?php echo $pallaCane->getType()?></p>
                <p>Per: <?php echo $pallaCane->getAnimal()?></p>
                <p>Varietà: <?php echo $pallaCane->gettoyType()?></p>
                <p>Prezzo: <?php echo $pallaCane->gettoyPrice()?></p>
            </div>
            <div class="prodotto cane">
                <p>Tipologia: <?php echo $frisbeeCane->getType()?></p>
                <p>Per: <?php echo $frisbeeCane->getAnimal()?></p>
                <p>Varietà: <?php echo $frisbeeCane->gettoyType()?></p>
                <p>Prezzo: <?php echo $frisbeeCane->gettoyPrice()?></p>
            </div>
        </div>
        <div>
            <div class="prodotto cane">
                <p>Tipologia: <?php echo $cucciaCane->getType()?></p>
                <p>Per: <?php echo $cucciaCane->getAnimal()?></p>
                <p>Varietà: <?php echo $cucciaCane->getcucciaType()?></p>
                <p>Prezzo: <?php echo $cucciaCane->getcucciaPrice()?></p>
            </div>
            <div class="prodotto cane">
                <p>Tipologia: <?php echo $casaCane->getType()?></p>
                <p>Per: <?php echo $casaCane->getAnimal()?></p>
                <p>Varietà: <?php echo $casaCane->getcucciaType()?></p>
                <p>Prezzo: <?php echo $casaCane->getcucciaPrice()?></p>
            </div>
        </div>
    </div>
    <h2>PRODOTTI GATTI</h2>
    <div class="animal-box">
        <div>
            <div class="prodotto gatto">
                <p>Tipologia: <?php echo $crocchetteGatti->getType()?></p>
                <p>Per: <?php echo $crocchetteGatti->getAnimal()?></p>
                <p>Varietà: <?php echo $crocchetteGatti->getfoodType()?></p>
                <p>Prezzo: <?php echo $crocchetteGatti->getfoodPrice()?></p>
            </div>
            <div class="prodotto gatto">
                <p>Tipologia: <?php echo $umidoGatti->getType()?></p>
                <p>Per: <?php echo $umidoGatti->getAnimal()?></p>
                <p>Varietà: <?php echo $umidoGatti->getfoodType()?></p>
                <p>Prezzo: <?php echo $umidoGatti->getfoodPrice()?></p>
            </div>
        </div>
        <div>
            <div class="prodotto gatto">
                <p>Tipologia: <?php echo $pallaGatto->getType()?></p>
                <p>Per: <?php echo $pallaGatto->getAnimal()?></p>
                <p>Varietà: <?php echo $pallaGatto->gettoyType()?></p>
                <p>Prezzo: <?php echo $pallaGatto->gettoyPrice()?></p>
            </div>
            <div class="prodotto gatto">
                <p>Tipologia: <?php echo $topoGatto->getType()?></p>
                <p>Per: <?php echo $topoGatto->getAnimal()?></p>
                <p>Varietà: <?php echo $topoGatto->gettoyType()?></p>
                <p>Prezzo: <?php echo $topoGatto->gettoyPrice()?></p>
            </div>
        </div>
        <div>
            <div class="prodotto gatto">
                <p>Tipologia: <?php echo $cucciaGatto->getType()?></p>
                <p>Per: <?php echo $cucciaGatto->getAnimal()?></p>
                <p>Varietà: <?php echo $cucciaGatto->getcucciaType()?></p>
                <p>Prezzo: <?php echo $cucciaGatto->getcucciaPrice()?></p>
            </div>
            <div class="prodotto gatto">
                <p>Tipologia: <?php echo $casaGatto->getType()?></p>
                <p>Per: <?php echo $casaGatto->getAnimal()?></p>
                <p>Varietà: <?php echo $casaGatto->getcucciaType()?></p>
                <p>Prezzo: <?php echo $casaGatto->getcucciaPrice()?></p>
            </div>
        </div>
    </div>
    <h2>USERS</h2>
    <div class="utente consentito">
        <p>Nome: <?php echo $francesco->getName()?></p>
        <p>Cognome: <?php echo $francesco->getSurname()?></p>
        <p>Da pagare: <?php echo $francesco->getPrice()?></p>
        <p>Prezzo scontato: <?php echo $francesco->getDiscount()?></p>
        <p>Validità: <?php echo $francesco->getValidity()?></p>
    </div>
    <div class="utente negato">
        <p>Nome: <?php echo $stefano->getName()?></p>
        <p>Cognome: <?php echo $stefano->getSurname()?></p>
        <p>Da pagare: <?php echo $stefano->getPrice()?></p>
        <p>Prezzo scontato: <?php echo $stefano->getDiscount()?></p>
        <p>Validità: <?php echo $stefano->getValidity()?></p>
    </div>
    
</body>
</html>