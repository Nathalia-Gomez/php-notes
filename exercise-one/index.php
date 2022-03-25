<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once "clase.php";
$casa1=new Casa("Juan", "Residencial", 123);
$casa1->imprimirImpuesto();
echo "<br>".$casa1->getPropietario()."<br>";

?>
</body>
</html>

