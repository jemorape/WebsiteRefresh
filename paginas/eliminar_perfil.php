<?php


	EliminarPerfil($_GET["Id"]);

	function EliminarPerfil($Id)
	{
		$dbhost	= "localhost";	   // localhost or IP
		$dbuser	= "root";		  // database username
		$dbpass	= "";		     // database password
		$dbname	= "login";    // database name
		$conexion = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);
		$sentencia="DELETE FROM perfiles WHERE Idperfil='".$Id."' ";
		mysqli_query($conexion , $sentencia) or die (mysqli_error());
	}
?>

<script type="text/javascript">
	alert("Perfil Eliminado exitosamente");
	window.location.href='perfiles.php';
</script>