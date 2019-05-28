<?php
session_start();
require '../funcs/conexion.php';
include '../funcs/funcs.php';

if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
	header("Location: ../index.php");
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
	<script src="main.js" ></script>
	<link rel="stylesheet" href="../estilos/css/bootstrap.min.css">
	<script src="../estilos/js/jquery-3.3.1.min.js"></script>
	<script src="../estilos/js/popper.min.js" ></script>
	<script src="../estilos/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://unpkg.com/jquery"></script>
	<script src="https://surveyjs.azureedge.net/1.0.87/survey.jquery.js"></script>
	<link href="https://surveyjs.azureedge.net/1.0.87/survey.css" type="text/css" rel="stylesheet"/>


	<style>
	body {
		padding-top: 20px;
		padding-bottom: 20px;
	}
	</style>
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
						<li><a href='../paginas/logout.php'>Cerrar Sesi&oacute;n</a></li>
					</ul>
			</div>
		</nav>

			<div style="text-align: center;" class="jumbotron .col-md-6 .col-md-offset-3">
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
	</body>
	</html>
