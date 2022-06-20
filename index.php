<?php

require_once __DIR__ . "/class/cibo.php";
require_once __DIR__ . "/class/giochi.php";

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
    <h1>PRODOTTO</h1>
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
    </div>
    
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
    </div>
    
</body>
</html>