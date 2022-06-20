<?php

require_once __DIR__ . "/class/cibo.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>
    <h1>PRODOTTO</h1>
    <div>
        <div>
            <p>Tipologia: <?php echo $crocchetteCani->getType()?></p>
            <p>Per: <?php echo $crocchetteCani->getAnimal()?></p>
            <p>Varietà: <?php echo $crocchetteCani->getfoodType()?></p>
            <p>Prezzo: <?php echo $crocchetteCani->getfoodPrice()?></p>
        </div>
        <div>
            <p>Tipologia: <?php echo $umidoCani->getType()?></p>
            <p>Per: <?php echo $umidoCani->getAnimal()?></p>
            <p>Varietà: <?php echo $umidoCani->getfoodType()?></p>
            <p>Prezzo: <?php echo $umidoCani->getfoodPrice()?></p>
        </div>
    </div>
    
    <div>
        <div>
            <p>Tipologia: <?php echo $crocchetteGatti->getType()?></p>
            <p>Per: <?php echo $crocchetteGatti->getAnimal()?></p>
            <p>Varietà: <?php echo $crocchetteGatti->getfoodType()?></p>
            <p>Prezzo: <?php echo $crocchetteGatti->getfoodPrice()?></p>
        </div>
        <div>
            <p>Tipologia: <?php echo $umidoGatti->getType()?></p>
            <p>Per: <?php echo $umidoGatti->getAnimal()?></p>
            <p>Varietà: <?php echo $umidoGatti->getfoodType()?></p>
            <p>Prezzo: <?php echo $umidoGatti->getfoodPrice()?></p>
        </div>
    </div>
    
</body>
</html>