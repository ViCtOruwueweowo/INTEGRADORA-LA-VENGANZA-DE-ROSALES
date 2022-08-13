<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Usaurio registrado</title>
</head>
<body>
    <div class="container">
        <?php
        use MyApp\Query\Ejecuta; 
        require("../../vendor/autoload.php");

        $usuario = new Ejecuta();
        extract($_POST);
        $HASH = password_hash($password, PASSWORD_DEFAULT);
        $nivel1=(1);
        $cadena="INSERT INTO usuario(nombres, apellidos, direccion, telefono, correo, f_nac, cp, contraseña, nivel_usuario) VALUES('$nombre','$apellido','$direccion','$telefono','$user','$fnac','$cp','$HASH','$nivel1')";

        $usuario->ejecutar($cadena);

        echo "<div class='alert alert=success'>USUARIO REGISTRADO</div>";
        header("refresh:7 login_app.php");
        ?>
    </div>
</body>
</html>


