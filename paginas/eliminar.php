<?php


	EliminarProducto($_GET["Id"]);

	function EliminarProducto($Id)
	{
		$dbhost	= "localhost";	   // localhost or IP
		$dbuser	= "root";		  // database username
		$dbpass	= "";		     // database password
		$dbname	= "login";    // database name
		$conexion = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);
		$sentencia="DELETE FROM clientes WHERE Id='".$Id."' ";
		mysqli_query($conexion , $sentencia) or die (mysqli_error());
	}
?>

<script type="text/javascript">
	alert("Usuario Eliminado exitosamente");
	window.location.href='clientes.php';
</script>
