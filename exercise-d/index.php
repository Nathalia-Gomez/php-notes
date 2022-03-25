<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="centrado">PROBLEMA</h1>
        <!--Elaborar un algoritmo que convierta centímetros a pulgadas. (1 pulgada=2.54; Pulg=cm/2.54)-->
    </header>

    <main>
        <table align="center">
            <form action="index.php" method="post">
                <tr>
                    <td width="200">Centímetros</td>
                    <td><input type="text" name="txtCentimetros" size="40"></td>
                </tr>

                <tr>
                    <td width="200"></td>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>
            
                <!--Código php-->
                <?php
                error_reporting(0);
                $centimetros=$_POST["txtCentimetros"];

                //Realizar los cálculos
                $pulgadas=$centimetros/2.54;

                ?>

                <tr>
                    <td>Centímetros</td>
                    <td><?php echo number_format($centimetros,2);?></td>
                </tr>

                <tr>
                    <td>Pulgadas</td>
                    <td><?php echo number_format($pulgadas,2);?></td>
                </tr>

            </form>
        </table>
    </main>

    <footer>
        <h6 class="centrado">Todos los derechos reservados-Nathalia Gómez</h6>
    </footer>
    </body>
</html>