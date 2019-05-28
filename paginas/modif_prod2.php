<?php
	$dbhost	= "localhost";	   // localhost or IP
	$dbuser	= "root";		  // database username
	$dbpass	= "";		     // database password
	$dbname	= "dorian";    // database name

	$conexion = mysqli_connect("localhost", "root", "" , "login");

	ModificarProducto($_POST['Id'], $_POST['Name'], $_POST['Email'], $_POST['Empresa'] , $_POST['Edad'], $_POST['Sexo']);

	function ModificarProducto($id_prod, $nom, $email, $empresa, $edad, $sex)
	{
		$conexion = mysqli_connect("localhost", "root", "" , "login"); 
		$sentencia="UPDATE clientes SET Id='".$id_prod."', Name= '".$nom."', Email= '".$email."' , Empresa='".$empresa."' , Edad='".$edad."',
		Sexo='".$sex."'  WHERE Id='".$id_prod."' ";
		mysqli_query($conexion , $sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='clientes.php';
</script>
