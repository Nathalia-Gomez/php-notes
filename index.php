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
</body>
<table align="center">
    <form action="pago.php" method="post">
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
            <td><input type="reset" value="Reset"></td>
        </tr>
    </form>
</table>
</html>