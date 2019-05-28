<?php
  $dbhost	= "localhost";	   // localhost or IP
	$dbuser	= "root";		  // database username
	$dbpass	= "";		     // database password
	$dbname	= "login";    // database name

  $consulta=ConsultarPerfil($_GET['Id']);

  function ConsultarPerfil($id_perf)
  {
	$conexion = mysqli_connect("localhost", "root", "" , "login");
    $sentencia="SELECT * FROM perfiles WHERE Idperfil='".$id_perf."' ";
    $resultado= mysqli_query($conexion , $sentencia) or die (mysql_error());
    $filas=mysqli_fetch_assoc($resultado);
    return [
      $filas['Idperfil'],
      $filas['Perfil'],
      $filas['Descripcion'],
    ];

  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
	integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
	<script src="estilos/js/jquery-3.2.1.min.js"></script>
	<script src="estilos/js/popper.min.js" ></script>
	<script src="estilos/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<title>Modificar Perfil</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>

  <div id="contenido">
	   <div class="container" >
			<form action="modif_perfil2.php" method="POST" >
			<input type="hidden" name="Id" value="<?php echo $_GET['Id']?> ">
			<span> <h1>Actualizar Perfil</h1> </span>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="inputUser">Perfil</label>
			  <input type="text" class="form-control" id="Perfil" name="Perfil" value="<?php echo $consulta[1] ?>" >
			</div>
			<div class="form-group col-md-6">
			  <label for="inputEmail">Descripcion</label>
			  <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="<?php echo $consulta[2] ?>" >
			</div>
		  </div>
		  <button type="submit" class="btn btn-primary">Actualizar</button>
		  <a href="perfiles.php" class="btn btn-danger" role="button">Cancelar</a>
		</form>
  	</div>
  </div>

</body>
</html>