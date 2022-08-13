<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Formulario PROVEEDORES</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION["CORREO"]))
    {
        echo "<h5 align='right'>Usuario: ".$_SESSION["CORREO"]."</h5>";
        echo "<h6 align='right'>
        <a href='../integradora/views/Logins/CERRARsesion.php'>[Cerrar sesión]</a>
        </h6>";
    }
    else
    {
        header("Location:formaltaPROV.php");
    }

    ?>
    <div class="container"></div>  
<h1>ALTA PROVEEDORES</h1>
    <form action="GUARDAprov.php" method="post">
        <fieldset>
        <br>
        Nombre: <input type="text" name="proveedor" placeholder=""> <br><br>
        Dirección: <input type="text" name="direccion" placeholder=""><br><br>
        Correo: <input type="text" name="corre" placeholder=""><br><br>
        Teléfono: <input type="text" name="tel" placeholder=""> <br><br>
        Ciudad: <input type="text" name="ciudad" placeholder=""><br><br>

        <div class="d-grip gap-2"></div>
        <input class="boton" type="submit" name="Guardar" value="Guardar">
    </form>
    </fieldset>
    <script src="..\js\bootstrap.js"></script>
</body>
</html>