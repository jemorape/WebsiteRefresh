<?php
session_start();
require 'funcs/conexion.php';
include 'funcs/funcs.php';

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://unpkg.com/jquery"></script>
	<script src="https://surveyjs.azureedge.net/1.0.87/survey.jquery.js"></script>
	<link href="https://surveyjs.azureedge.net/1.0.87/survey.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="./index.css">


	<style>
	body {
		padding-top: 20px;
		padding-bottom: 20px;
	}
	</style>
</head>

<body>
	<div class="container">

		<nav class='navbar navbar-default'>
			<div class='container-fluid'>


				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li class='active'><a href='welcome.php'>Inicio</a></li>
					</ul>

					<?php if($_SESSION['tipo_usuario']==1) { ?>
						<ul class='nav navbar-nav'>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administracion<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="clientes.php">Clientes</a></li>
									<li><a href="usuarios.php">Usuarios</a></li>
									<li><a href="perfiles.php">Perfiles</a></li>
									<li><a href="permisos.php">Permisos</a></li>
								</ul>
							</li>
						</ul>
					<?php } ?>
					<?php if($_SESSION['tipo_usuario']==1) { ?>
						<ul class='nav navbar-nav'>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Operación<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="test.php">Test1</a></li>
									<li><a href="">Test2</a></li>
								</ul>
							</li>
						</ul>
					<?php } ?>

					<ul class='nav navbar-nav navbar-right'>
						<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="jumbotron">
			<h2><?php echo 'Bienvenido '.utf8_decode($row['nombre']); ?></h1>
				<p>Continua en el link para realizar tu test</p>
				<br />
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Fecha</th>
							<th scope="col">Estatus</th>
							<th scope="col">Link</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Pendiente</td>
							<td><a href="test1.php">Link</a></td>
						</tr>
					</tbody>
				</table>
			</div>


		</div>
	</body>
	</html>
