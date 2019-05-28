<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="estilos/css/bootstrap.min.css">
	<script src="estilos/js/jquery-3.2.1.min.js"></script>
	<script src="estilos/js/popper.min.js" ></script>
	<script src="estilos/js/bootstrap.min.js" ></script>
	<script src="estilos/js/jquery.min.js" ></script>
	<script src="estilos/js/main.js" ></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title>EMPRESA</title>
	</head>
<body>
<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "login";

	$mysqli = new mysqli($servername, $username, $password, $dbname);
	$salida = "";
	
	$query = "SELECT * FROM clientes  ORDER BY Name";
	
	if(isset($_POST['consulta'])){
		$q = $mysqli->real_escape_string($_POST['consulta']);
		$query = "SELECT Id, Name, Email, Empresa, Edad, Sexo, Test1, Test2 FROM clientes 
		WHERE Name LIKE '%".$q."%' OR Email LIKE '%".$q."%' OR Empresa LIKE '%".$q."%' OR Edad LIKE '%".$q."%' OR Sexo LIKE '%".$q."%'";
		
	}
	$resultado = $mysqli->query($query);
	
	if($resultado->num_rows > 0)
	{
		$salida.="<table class='table tabla_datos'>
		          <thead>
				     <tr>
				         <th scope='col' >Id</th>
						 <th scope='col' >Nombre</th>
						 <th scope='col'>Email</th>
						 <th scope='col'>Empresa</th>
						 <th scope='col'>Edad</th>
						 <th scope='col'>Sexo</th>
						 <th scope='col'>Test1</th>
						 <th scope='col'>Test 2</th>
						 <th scope='col'>Actualizar</th>
						 <th scope='col'>Eliminar</th>
					</tr>
                 </thead>";

         while($fila = $resultado->fetch_assoc()){
		   $salida.="<tr>
		            <td>".$fila['Id']."</td>
					<td>".$fila['Name']."</td>
					<td>".$fila['Email']."</td>
					<td>".$fila['Empresa']."</td>
					<td>".$fila['Edad']."</td>
					<td>".$fila['Sexo']."</td>
					<td>".$fila['Test1']."</td>
					<td>".$fila['Test2']."</td>
					<td>  <a href='modif_prod1.php?Id=".$fila['Id']."'> <button type='button' class='btn btn-primary'>
					<span class='glyphicon glyphicon-wrench' aria-hidden='true'></span></button> </a> </td>
					<td> <a href='eliminar.php?Id=".$fila['Id']."''><button type='button' class='btn btn-danger'>
					<span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></a> </td>
		          </tr>";
		 }	
			$salida.= "</table>";
 	}else{
	    $salida.= "<div class='alert alert-danger' role='alert'> No se encontro ningun dato! </div>";
	}
	echo $salida;
	
	$mysqli->close();

?>
</body>
	</html>