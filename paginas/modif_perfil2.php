<?php
	$conexion = mysqli_connect("localhost", "root", "" , "login");

	ModificarPerfil($_POST['Id'], $_POST['Perfil'], $_POST['Descripcion']);

	function ModificarPerfil($id_perf, $Perfil, $Descripcion)
	{
		$conexion = mysqli_connect("localhost", "root", "" , "login"); 
		$sentencia="UPDATE perfiles SET Idperfil='".$id_perf."', Perfil= '".$Perfil."', Descripcion= '".$Descripcion."' WHERE Idperfil='".$id_perf."' ";
		mysqli_query($conexion , $sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Perfil Modificado exitosamente");
	window.location.href='perfiles.php';
</script>