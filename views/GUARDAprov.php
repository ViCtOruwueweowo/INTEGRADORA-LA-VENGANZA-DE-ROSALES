<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Registro PROVEEDOR</title>
</head>
<body>
    <div class="container"> 

    <?php
    use MyApp\Query\Ejecuta;
    require("../../vendor/autoload.php");

    $insert = new Ejecuta();

    extract($_POST);

    $cadena = "INSERT INTO proveedor(NOMBRE, DIRECCION, CORREO, TELEFONO, CIUDAD) VALUES('$proveedor','$direccion','$corre','$tel','$ciudad')";

    $insert->ejecutar($cadena);

    echo "<div class='alert alert-success'>
    CLIENTE REGISTRADO</div>";

    header("refresh:3; ../../index.php"); 

    ?>

    </div>
</body>
</html>