<!DOCTYPE html>
<html>
<head>
	<title>La tiendita de Chona</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fonts/font-awesome.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<link href="slider/js-image-slider.css" rel="stylesheet">

	<link href="estilos.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/logo-chona.png">


</head>
<body class="bg-danger">

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="index.php"><img src="img/logo-chona.png" width="30px" height="30px" class="d-inline-block align-top"> <span style="color:white;  font-family: MV boli;">La tiendita de Chona</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      	<a class="nav-link active sd" href="./products.php" onclick="prueba()" style="white">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link sd" href="./cart.php" style="white">Carrito</a>
      </li>
     
    </ul>
  </div>

</nav>



<div class="container" style="background: #F8F9E4; height: 91vh">
	<div class="row">
		<div class="col-md-12">
		
				<div id="sliderFrame" style="margin-top: 10px;">
					
					<div id="slider">
						<a href="" target="_blank"><img src="img/verduras.jpg" alt="#cap1" /></a>
						
						<img src="img/carrito_de_compras_.png" class="img-rounded" alt="Verduras y hortalizas" width="304" height="236"> 

					</div>

				</div>

		</div>
	</div>
	<hr>
		<p>Diseñada Por <a href="https://www.facebook.com/66shadow66" target="_blank">Luis Caceres</a></p>

</div>


<!-- DIVS QUE SE REFERENCIAN EN EL ALT DE LAS IMG -->
	<div style="display: none;">
		<div id="cap1">
			Bienvenido a la <a href="http://www.google.com/">tiendita de Chona</a>.
		</div>
	</div>

<script src="bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script src="slider/js-image-slider.js"></script>

</body>
</html>
