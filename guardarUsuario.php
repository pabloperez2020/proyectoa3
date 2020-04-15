<?php
$nombre=$_POST['nombre'];
$correo=$_POST['usuario'];
$password=$_POST['password'];
include_once 'conexion.php';
$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
$consulta="INSERT INTO Usuarios(NombreCompleto,Tipo,Correo,Password)
VALUES('$nombre',2,'$correo','$password')";
if($resultado=$mysqlConexion->query($consulta))
{
    header("Location:login.php");
}
else
{
    header("Location:registro.php");
}
?>