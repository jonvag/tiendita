<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>La Tiendita de Chona</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fonts/font-awesome.css">
	<link href="slider/js-image-slider.css" rel="stylesheet">
	<link href="estilos.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo-chona.png">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		  <a class="navbar-brand" href="index.php"><img src="img/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top"> <span style="color:white; font-family: MV boli;">La tiendita de Chona</span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		      	<a class="nav-link active sd" href="./products.php" style="white">Productos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link sd" href="./cart.php" style="white">Carrito</a>
		      </li>
		     
		    </ul>
		  </div>

</nav>

<div class="container"  style="background: #F8F9E4; height: 91vh">
	<div class="row">
		<div class="col-md-12">
			<hr>
			<h1>Carrito</h1>
			<br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $con->query("select * from product");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table-sm table-striped table-bordered table-condensed table-hover" width="100%">
<thead class="bg-info">
	<th>Cantidad</th>
	<th>Producto</th>
	<th>Precio Unitario</th>
	<th>Total</th>
	<th>Accion</th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
foreach($_SESSION["cart"] as $c):
$products = $con->query("select * from product where id=$c[product_id]");
$r = $products->fetch_object();
	?>
<tr>
<th><?php echo $c["q"];?></th>
	<td><?php echo $r->name;?></td>
	<td>$ <?php echo $r->price; ?></td>
	<td>$ <?php echo $c["q"]*$r->price; ?></td>
	<td style="width:260px;">
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}
	?>
		<a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger"><i class="fa fa-times"></i> Eliminar</a>
	</td>
</tr>
<?php endforeach; ?>
</table>

<form class="form-horizontal" method="post" action="./php/process.php">
<table class="table-sm">
	<tr>
		<td><label for="email">Email del Cliente</label></td>
		<td><input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email del cliente"></td>
		<td><button type="submit" class="btn btn-success"><img src="img/tick.png" width="20px" height="20px"> Procesar Venta</button></td>
	</tr>
</table>
 </form>




<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>

<br><br><hr>
<p>Diseñada Por <a href="https://www.facebook.com/66shadow66" target="_blank">Luis Caceres</a></p>
		</div>
	</div>
</div>


<script src="bootstrap/jquery-3.3.1.min.js"></script>
<script src="slider/js-image-slider.js"></script>
<script type="text/javascript" src="bootstrap/loadingoverlay.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>