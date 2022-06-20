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
    <p><?php echo $crocchette->getType()?></p>
    <p><?php echo $crocchette->getAnimal()?></p>
    <p><?php echo $crocchette->getfoodType()?></p>
    <p><?php echo $crocchette->getfoodPrice()?></p>
</body>
</html>