<?php
session_start();
require '../funcs/conexion.php';
include '../funcs/funcs.php';

if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
	header("Location: index.php");
}

$idUsuario = $_SESSION['id_usuario'];

$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
$result = $mysqli->query($sql);

$row = $result->fetch_assoc();
?>

<html>
<head>
	<title>Empresa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="../paginas/main.js" ></script>
	<link rel="stylesheet" href="../estilos/css/bootstrap.min.css">
	<script src="../estilos/js/jquery-3.3.1.min.js"></script>
	<script src="../estilos/js/popper.min.js" ></script>
	<script src="../estilos/js/bootstrap.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>

<body>
		<nav style="background-color: white;" class="navbar navbar-expand-lg navbar-default bg-default">
		<div class="navbar-header">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  </div>
		 <a style="padding-top: 0px;" class="navbar-brand" href="../index.php">
		  <img src="../img/logo.png" style="width: 100px; height:50px; " class="d-inline-block align-top" alt=""/>
        </a>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			 <li class="nav-item dropdown">
			 <?php if($_SESSION['tipo_usuario']==1) { ?>
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Administracion
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="../paginas/clientes.php">Clientes</a>
				  <a class="dropdown-item" href="../paginas/usuarios.php">Usuarios</a>
				  <a class="dropdown-item" href="../paginas/perfiles.php">Perfiles</a>
				  <a class="dropdown-item" href="../paginas/permisos.php">Permisos</a>
				</div>
			  </li>
			  <?php } ?>
			  <li class="nav-item dropdown">
			  <?php if($_SESSION['tipo_usuario']==1) { ?>
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Operacion
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="../paginas/test.php">Tests</a>
				</div>
			  </li>
			  <?php } ?>
			</ul>
			<ul class='nav navbar-nav navbar-right'>
						<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
					</ul>
		  </div>
		</nav>

      <div class="container">
  			  <div class="row">
  				<div class="col">
  				  <p style="font-size: 30px;">Usuarios</p>
  				</div>
  				<div class="col-15">
  				<form class="form-inline">
  				  <input type="text" required size="50" class="form-control" id="BuscarUsuario" placeholder="Buscar">
  					</form>
  				</div>
  				<div class="col">
                      <p>
  					  <a class="btn btn-success" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  						Agregar Usuario
  					  </a>
  					</p>
  				</div>
  			  </div>
  		</div>
  		<div class="container">
  		<div class="col-15 collapse" id="collapseExample">
  					  <div class="col-15 card card-body">
  						 <h3>Agregar Nuev@</h3>
  						 <form class="form-inline">
  						 <div class = "row">
  								<div class="col">
  								  <input type="text" id="Usuario" required size="15" class="form-control" placeholder="Usuario">
  								</div>
  								<div class="col">
  								  <input type="email" id="Email" required size="30" class="form-control" placeholder="Email">
  								</div>
  								<div class="col">
  								  <input type="password" id="Password" required size="15" class="form-control" placeholder="Password">
  								</div>
  								<select id="inputState" class="form-control">
  								    <option seleceted >-Perfiles-</option>
  									<option id="sexoF">F</option>
  									<option id="sexoM">M</option>
  								 </select>
  								<button style="margin-left: 20px;" id="GuardarUsuario"type="submit" class="btn btn-success">Guardar</button>
  						</div>
  						 </form>
  					  </div>
  		</div>
  		</div>
			</div>

	</body>
	</html>
