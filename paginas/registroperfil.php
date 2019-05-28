<?php
include 'conexion.php';
include 'perfiles.php';
error_reporting(E_ALL ^ E_NOTICE);
$Perfil = $_POST["Nperfil"];
$Descripcion = $_POST["Dperfil"];

$conexion = mysqli_connect("localhost", "root", "" , "login");
//CONSULTA PARA INSERTAR LOS DATOS
$insertar = "INSERT INTO perfiles(Perfil, Descripcion) VALUES ('$Perfil', '$Descripcion')";

//verificar perfil
$verificar_perfil = mysqli_query($conexion, "SELECT * FROM perfiles  WHERE Perfil = '$Perfil'");
if(mysqli_num_rows($verificar_perfil) > 0){
	echo "<script>alert('El perfil ya existe');</script>";
	exit;
}

//EJECUTAR CONSULTA
$resultado = mysqli_query($conexion , $insertar);
if(!$resultado){
echo "<script>alert('Error al registrarse');</script>"; }
else
{echo "<script>alert('Registro Exitoso');</script>";
 echo "<script>window.location.href='perfiles.php';</script>;";
}

//cerrar conexion
mysqli_close($conexion);