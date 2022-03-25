<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2>Clases</h2>
    <?php
    include "clases.php";

    $i1=new Instructor("Luis", "Marion", 3000);
    echo "<br>";
    echo $i1->nombreCompleto();
    echo "<br>";
    echo $i1->getSalario();

    $e1=new Estudiante("Luis", "Marion", "ggth");
    echo "<br>";
    echo $e1->nombreCompleto();
    echo "<br>";
    echo $e1->getMatricula();
?>
</body>
</html>