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
        <h1 class="centrado">PAGO DE EMPLEADO</h1>
    </header>

<table align="center">
    <form action="index.php" method="post">
        <tr>
            <td width="200">Empleado</td>
            <td><input type="text" name="txtEmpleado" size="40"></td>
        </tr>
        <tr>
            <td width="200">Horas trabajadas</td>
            <td><input type="text" name="txtHoras" size="40"></td>
        </tr>
        <tr>
            <td width="200">Tarifa por horas</td>
            <td><input type="text" name="txtTarifa" size="40"></td>
        </tr>
        <tr>
            <td width="200"></td>
            <td><input type="submit" value="Procesar"></td>
            <td><input type="reset" value="Limpiar"></td>
        </tr>

        <!--Código php-->
        <?php
        error_reporting(0);
        $empleado=$_POST["txtEmpleado"];
        $horas=$_POST["txtHoras"];
        $tarifa=$_POST["txtTarifa"];

        //Realizar los cálculos
        $salarioBruto=$horas*$tarifa;
        $descuentoSeguroSalud=$salarioBruto*0.12;
        $descuentoAfp=$salarioBruto*0.10;
        $salarioNeto=$salarioBruto-$descuentoSeguroSalud-$descuentoAfp;

        ?>

        <tr>
            <td>Empleado</td>
            <td><?php echo $empleado;?></td>
        </tr>
        <tr>
            <td>Horas trabajadas</td>
            <td><?php echo $horas;?></td>
        </tr>
        <tr>
            <td>Tarifa horas</td>
            <td><?php echo "$".number_format($tarifa,2);?></td>
        </tr>
        <tr>
            <td>Sueldo bruto</td>
            <td><?php echo "$".number_format($salarioBruto,2);?></td>
        </tr>
        <tr>
            <td>Descuento salud</td>
            <td><?php echo "$".number_format($descuentoSeguroSalud,2);?></td>
        </tr>
        <tr>
            <td>Descuento AFP</td>
            <td><?php echo "$".number_format($descuentoAfp,2);?></td>
        </tr>
        <tr>
            <td>Sueldo neto</td>
            <td><?php echo "$".number_format($salarioNeto,2);?></td>
        </tr>

    </form>
</table>

    <footer>
        <h6 class="centrado">Todos los derechos reservados-Nathalia Gómez</h6>
    </footer>
    </body>
</html>