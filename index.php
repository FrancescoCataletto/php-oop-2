<?php

require_once __DIR__ . "/class/product.php";

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
    <p><?php echo $prodotto->getType()?></p>
    <p><?php echo $prodotto->getAnimal()?></p>
</body>
</html>