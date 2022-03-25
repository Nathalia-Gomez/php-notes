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
    </header>

    <main>
        <table align="center">
            <form action="index.php" method="post">
                <tr>
                    <td width="200">Horas</td>
                    <td><input type="text" name="txtHoras" size="40"></td>
                </tr>

                <tr>
                    <td width="200"></td>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>
            
                <!--Código php-->
                <?php
                error_reporting(0);
                $horas=$_POST["txtHoras"];

                //Realizar los cálculos
                $salarioBruto=$horas*0.12;

                ?>

                <!--<tr>
                    <td>Empleado</td>
                    <td><?php// echo $empleado;?></td>
                </tr>-->
                
                <tr>
                    <td>Tarifa horas</td>
                    <td><?php echo "$".number_format($salarioBruto,2);?></td>
                </tr>

            </form>
        </table>
    </main>

    <footer>
        <h6 class="centrado">Todos los derechos reservados-Nathalia Gómez</h6>
    </footer>
    </body>
</html>