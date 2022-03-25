<?php

    require_once "clase.php";
    $casa1=new Casa("Juan", "Residencial", 123);
    $casa1->imprimirImpuesto();
    echo "<br>".$casa1->getPropietario()."<br>";

?>