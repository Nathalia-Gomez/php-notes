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
        <h1 class="centrado">ALGORITMO PARA SABER UNA EDAD</h1>
        <!--Realizar un algoritmo que calcule la edad de una persona.-->
    </header>

    <main>
        <table align="center">
            <form action="index.php" method="post">
                <tr>
                    <td width="200">¿En qué año estamos?</td>
                    <td><input type="text" name="txtActual" size="40"></td>
                </tr>

                <tr>
                    <td width="200">¿En qué año naciste?</td>
                    <td><input type="text" name="txtNacimiento" size="40"></td>
                </tr>

                <tr>
                    <td width="200"></td>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>
            
                <!--Código php-->
                <?php
                error_reporting(0);
                //apodo
                $actual=$_POST["txtActual"];
                $nacimiento=$_POST["txtNacimiento"];

                //Realizar los cálculos
                $edad=$actual-$nacimiento;

                ?>

                <tr>
                    <td>Edad</td>
                    <td><?php echo number_format($edad,2);?></td>
                </tr>

            </form>
        </table>
    </main>

    <footer>
        <h6 class="centrado">Todos los derechos reservados-Nathalia Gómez</h6>
    </footer>
    </body>
</html>