<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cartas.css">
    <link rel="stylesheet" href="css/tablas.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
        /* Para el ancho y alto de las imagenes. Modificalo a gusto =)  */
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            height: 500px;
            margin: auto;
        }
        /* Para los margenes del contendor de las fotos. Podes cambiarle el ancho a gusto tambien! */
        .carousel-control {
            width: 10%;
        }
    </style>
    <title>Document</title>
</head>
<body style="background-image:url(https://www.xtrafondos.com/descargar.php?id=4052&resolucion=3840x2160)">
  <!-- Aqui comienza lo del menu-->
<nav class="navbar navbar-expand" style="background-color:#571071ad">
    <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <img src="img/logo.png" alt="" width="49" height="50" class="d-inline-block align-text-top">
            </a>
          </div>      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="views/vistaempresa/empleados.php" style="color:white">Empleados</a>
          </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="views/vistaempresa/proveedores.php" style="color:white">Proveedores</a>
          </li> 
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="views/Categorias/ofertas.php" style="color:white">Ofertas</a>
          </li>
          </li> 
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="views/productos/todos.php" style="color:white">Productos</a>
          </li>
        </li> 
       
            </ul>
      </div>
      <div class="container-end" >
        <a class="navbar-brand" href="views/Logins/login_app.php" >
          <img src="img/icono.png" alt="iniciarsesion" width="50" height="25" class="d-inline-block align-text-top">
        </a>
      </div>
    </div>
  </nav>
<!-- Aqui termina lo del menu-->   
<!-- Todo esto es el carousel de imagenes-->
<div class="container">
  <br>
  <div id="carrusel" class="carousel slide" data-ride="carousel">

    <!-- Opcional, bullets abajo para saltar directamente a una foto (si los pones tiene q haber 1 por foto) -->
    <ol class="carousel-indicators">
      <li data-target="#carrusel" data-slide-to="0" class="active"></li>
      <li data-target="#carrusel" data-slide-to="1"></li>
      <li data-target="#carrusel" data-slide-to="2"></li>
    </ol>

    <!-- Contenedor de las fotos -->
    <div class="carousel-inner" role="listbox">

<!-- Foto 1 -->
<div class="item active">
  <img src="img/img.jpg">
</div>

<!-- Foto 2 -->
<div class="item">
  <img src="https://www.inacua.com/lagranja/wp-content/uploads/sites/60/2022/05/Web-Home-Campana-Este-verano-nos-vemos-las-caras-Inacua-La-Granja.jpg">
</div>

<!-- Foto 3 -->
<div class="item">
  <img src="https://www.sportcityvalencia.com/wp-content/uploads/2022/01/Sportcity-Blog.png">
</div>

</div>

    <!-- Controles para pasar las fotos -->
    <a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- aqui acaba lo del carousel de imagenes-->
<br>
<br>
<br>
<!--IMC-->
<div style="height: 500px;width: 100%;">
  <div class="container" style="background-color: #5c008780;">
    <div class="container">
      <div class="row">
          <div class="card col-3 " style="border: transparent;background-color: transparent;">
  <h3 style="font-family:century gothic;color: white;font-size:50px;text-align:center"><b>IMC</b></h3>
  <div class="card " style="border: transparent;background-color: transparent;">
  <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;color: white;text-align:justify">El índice de masa corporal (IMC) es un número que se calcula con base en el peso y la estatura de la persona. Para la mayoría de las personas, el IMC es un indicador confiable de la gordura y se usa para identificar las categorías de peso que pueden llevar a problemas de salud.</p>
  </div>
          </div>
          <div class="card col-3 text-center" style="border: transparent;background-color: transparent;">
              <h4 style="font-family:'Courier New', Courier, monospace ;color: white;font-size 20px;"><b>¿Quieres Calcular Tu IMC?</b></h4>
              
  <p style="font-size: 18px; font-family: Arial, Helvetica, sans-serif;color: white;text-align:justify">Favor de llenar todos los campos con la informacion correcta para calcular de IMC de forma concreta</p>
           
              <form  method="get">
      <input type="text" name="num1" style="width: 250px;" placeholder="Ingrese su Altura..">
      <br>
      <br>
      <input type="text" name="num2" style="width: 250px;" placeholder="Ingrese su Peso..">
       <br> 
       <br>
      <input type="submit" value="Calcular" style="background-color:rgb(95, 95, 174) ;border: transparent;color: white;width: 150px; height: 35px;margin: 5px;">
              
          </div>
          <div class="card col-6" style="border: transparent;background-color: transparent;">
              <table >
               
                      <tr>
                          <th colspan="100%" style="color:white">INDICE DE MASA CORPORAL</th>
                      </tr>
                      <tr>
                          <td style="color:white">Insuficiencia ponderal</td>
                          <td style="color:white"><18.5</td>
                       </tr>
                       <tr>
                          <td style="color:white">Intervalo normal</td>
                          <td style="color:white">18.5-24.9</td>
                       </tr>
                       <tr>
                          <td style="color:white">Sobrepeso</td>
                          <td style="color:white">25.0</td>
                       </tr>
                       <tr>
                          <td style="color:white">Preobesidad</td>
                          <td style="color:white">>30.0</td>
                       </tr>
                       <tr>
                          <td style="color:white">Obecidad clase l</td>
                          <td style="color:white">30.0-34.9</td>
                       </tr>
                       <tr>
                          <td style="color:white">Obecidad Clase ll</td>
                          <td style="color:white">35.0-39.9</td>
                       </tr>
               <tr>
                  <td style="color:white">Obecidad Clase lll</td>
                  <td style="color:white">>40.0 hola</td>
               </tr>
              </table>
              <?php
$altura = $_POST['num1'];
$peso = $_POST['num2'];
$multiplica = $altura * $peso;

echo $multiplica;
              ?>
          </div>
      </div>
    </div>
  </div>
  <!--Fin de laTabla del imc-->
<br>
<br>
<br>
<!--Cards giratorias-->
<div class="container" style="display: flex;align-items:center;justify-content: center;min-height: 200px;background-color:transparent;">
  <td ><div class="card">
    <div class="face front">
<img src="https://fvandina.com/wp-content/uploads/2020/05/promociones.jpg" alt="">
<h3>OFERTAS</h3>
    </div>
    <div class="face back">
<h3 style="color: orange;">!!DISFRUTA DE GRANDES OFERTAS¡¡</h3>
<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
<div class="link">
    <a href="views/Categorias/ofertas.php">Ir a Ofertas</a>
</div>
    </div>
  </div></td>
  <td ><div class="card">
    <div class="face front">
<img src="img/inscripcion.jpg" alt="">
<h3>INSCRIPCION</h3>
    </div>
    <div class="face back">
<h3 style="color: orange;">!!INSCRIBETE AHORA¡¡</h3>
<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
<div class="link">
    <a href="views/Logins/login_gym.php">Ir a Inscripcion</a>
</div>
    </div>
    
  </div></td>
  <td ><div class="card">
    <div class="face front">
<img src="https://www.lifefitness-latinamerica.com/resource/image/777204/portrait_ratio1x1/600/600/d7dfae1242ae38425be3d8cbc420dd89/Ef/axiom-series.jpg" alt="">
<h3>CONOCENOS</h3>
    </div>
    <div class="face back">
<h3 style="color: orange;">!!SOMOS GYM CLUB¡¡</h3>
<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum est aut distinctio rem dicta minima iste voluptas quia, sapiente consequuntur odio dolorum excepturi illum cumque.</P>
<div class="link">
    <a href="views/nosotros.php">Ir a conocenos</a>
</div>
    </div>
    
  </div></td>
</div>
<!--Fin de cards giratorias -->


<br>
<br>
<br>
<!-- Semi final-->
<div style="background-color:rgb(222, 222, 222);">
<div class="conatiner">
  <div class="row">
    <div class="col-4 text-center">
      <h5 style="color: white;"><b>Informacion</b></h5>
      
      <a href="../integradora/views/AvisoPrivasidad.php"><b>Aviso De Privacidad</b></a>
    </div>
    <div class="col-4 text-center">
      <h5 style="color: white;"><b></b></h5>
      
    </div>
    <div class="col-4 text-center">
      <h5 style="color: white;"><b>Contactanos Por</b></h5>
      <a href="https://www.facebook.com" style="margin:5px"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/?lang=es" style="margin:5px"> <i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com" style="margin:5px"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</div>
</div>
<!-- semi final finall-->
<!-- final-->
<div class="text-center" style="background-color: black;">
<p style="color: white;">©2022 GymClubBox SA de CV | Cerro de la Estrella 398, Tierra y Libertad, 27040 Torreón, Coah.</p>
    </div>
<!-- final-->
</body>
</html>