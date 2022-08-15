<?php
session_start();

require_once("clase.php");

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
			'vai_img'		=>$codproducto[0]["img"],
			'vai_descuento' =>$codproducto[0]["NOMBRE"]
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
<html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="views\carro\carrito\bebidas.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="views\carro\carrito/bebidas.php">Energizantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="views\carro\carrito/suplementos.php">Suplementos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="views\carro\carrito/equipo.php">Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/APLICACIONES_WEB_3B/integradora/views/Categorias/ofertas.php">Carrito</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>    


<meta charset="UTF-8">
<head>
<title>VaidrollTeam</title>
<link href="estilo.css" rel="stylesheet" />
</head>
<body>
<div align="center"><h1>VaidrollTeam - Carrito de compras</h1></div>
<div>
<div><h2>Lista de productos a comprar.</h2></div>


<?php
if(isset($_SESSION["items_carrito"]))
{
    $totcantidad = 0;
    $totprecio = 0;
?>	



  <?php
} else {
?>
<div align="center"><h3>¡El carrito esta vacío!</h3></div>

<?php 
}
?>
</div>

<div>
<div><h2>Productos</h2></div>
<div class="contenedor_general">
	<?php
	$productos_array = $usar_db->vaiquery("SELECT * FROM productos ORDER BY CATEGORIA ASC");
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