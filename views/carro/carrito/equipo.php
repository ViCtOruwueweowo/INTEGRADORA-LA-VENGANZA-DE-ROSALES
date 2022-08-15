<?php
session_start();

require_once("../src/data.php");

$usar_db = new DBControl();

if(!empty($_GET["accion"])) 
{
switch($_GET["accion"]) 
{
	case "agregar":
		if(!empty($_POST["txtcantidad"])) 
		{
			$codproducto = $usar_db->vaiQuery("SELECT * FROM productos WHERE cod='" . $_GET["cod"] . "'");
			$items_array = array($codproducto[0]["cod"]=>array(
			'vai_nom'		=>$codproducto[0]["NOMBRE"], 
			'vai_cod'		=>$codproducto[0]["cod"], 
			'txtcantidad'	=>$_POST["txtcantidad"], 
			'vai_pre'		=>$codproducto[0]["PRECIO_UNITARIO"], 
			'vai_img'		=>$codproducto[0]["img"]
			));
			
			if(!empty($_SESSION["items_carrito"])) 
			{
				if(in_array($codproducto[0]["cod"],
				array_keys($_SESSION["items_carrito"]))) 
				{
					foreach($_SESSION["items_carrito"] as $i => $j) 
					{
							if($codproducto[0]["cod"] == $i) 
							{
								if(empty($_SESSION["items_carrito"][$i]["txtcantidad"])) 
								{
									$_SESSION["items_carrito"][$i]["txtcantidad"] = 0;
								}
								$_SESSION["items_carrito"][$i]["txtcantidad"] += $_POST["txtcantidad"];
							}
					}
				} else 
				{
					$_SESSION["items_carrito"] = array_merge($_SESSION["items_carrito"],$items_array);
				}
			} 
			else 
			{
				$_SESSION["items_carrito"] = $items_array;
			}
		}
	break;
	case "eliminar":
		if(!empty($_SESSION["items_carrito"])) 
		{
			foreach($_SESSION["items_carrito"] as $i => $j) 
			{
				if($_GET["eliminarcode"] == $i)
				{
					unset($_SESSION["items_carrito"][$i]);	
				}			
				if(empty($_SESSION["items_carrito"]))
				{
					unset($_SESSION["items_carrito"]);
				}
			}
		}
	break;
	case "vacio":
		unset($_SESSION["items_carrito"]);
	break;	
	case "pagar":
	echo "<script> alert('Gracias por su compra - The Box Club ♀');window.location= 'index.php' </script>";
		unset($_SESSION["items_carrito"]);
	
	break;	
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/estiloventa.css">
    <title>Equipo</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bebidas.php">Energizantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="suplementos.php">Suplementos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="equipo.php">Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="carrito.php">Carrito</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>    
<div align="center"><h1>VaidrollTeam - Carrito de compras</h1></div>
<div>
<div><h2>Equipo de uso</h2>
</div>
<div class="contenedor_general">
	<?php
	$productos_array = $usar_db->vaiquery("SELECT * FROM productos where CATEGORIA='3' ");
	if (!empty($productos_array)) 
	{ 
		foreach($productos_array as $i=>$k)
		{
	?>
		<div class="contenedor_productos">
			<form method="POST" action="index.php?accion=agregar&cod=
			<?php echo $productos_array[$i]["cod"]; ?>">
			<div><img src="<?php echo $productos_array[$i]["img"]; ?>"></div>
			<div>
			<div style="padding-top:20px;font-size:18px;"><?php echo $productos_array[$i]["NOMBRE"]; ?></div>
			<div style="padding-top:10px;font-size:20px;"><?php echo "$".$productos_array[$i]["PRECIO_UNITARIO"]; ?></div>
			<div><input type="text" name="txtcantidad" value="1" size="2" /><input type="submit" value="Agregar" />
			</div>
			</div>
			</form>
		</div>
	<?php
		}
	}
	?>
</div>
</body>
</html>