<?php
include 'conexion.php';
include 'clientes.php';
error_reporting(E_ALL ^ E_NOTICE);
$Usuario = $_POST["Usuario"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Empresa = $_POST["Empresa"];
$Edad = $_POST["Edad"];
$Sexo = $_POST["Sexo"];
$Test1 = $_POST["check1"];
$Test2 = $_POST["check2"];

//CONSULTA PARA INSERTAR LOS DATOS
$insertar = "INSERT INTO clientes(Name, Email, Password, Empresa, Edad, Sexo, Test1, Test2) VALUES ('$Usuario', '$Email', '$Password' , '$Empresa' , 
'$Edad' , '$Sexo' , '$Test1' , '$Test2')";

//verificar cliente
$verificar_cliente = mysqli_query($conexion, "SELECT * FROM clientes  WHERE Name = '$Usuario'");
if(mysqli_num_rows($verificar_cliente) > 0){
	echo "<script>alert('El cliente ya existe');</script>";
	exit;
}

//verificar correo
$verificar_cliente = mysqli_query($conexion, "SELECT * FROM clientes  WHERE Email = '$Email'");
if(mysqli_num_rows($verificar_cliente) > 0){
	echo "<script>alert('El correo ya existe');</script>";
	exit;
}

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion , $insertar);
if(!$resultado){
echo "<script>alert('Error al registrarse');</script>"; }
else
{echo "<script>alert('Registro Exitoso');</script>";
 echo "<script>window.location.href='clientes.php';</script>;";
}

//cerrar conexion
mysqli_close($conexion);

	