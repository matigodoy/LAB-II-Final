<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["precioVenta"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["autor"]) || 
	!isset($_POST["editorial"]) || 
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["precioVenta"];
$existencia = $_POST["existencia"];
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];


$sentencia = $base_de_datos->prepare("UPDATE productos SET codigo = ?, descripcion = ?, precioVenta = ?, existencia = ?, nombre = ?, autor = ?, editorial = ? WHERE id = ?;");
$resultado = $sentencia->execute([$codigo, $descripcion, $precioVenta, $existencia, $nombre, $autor, $editorial, $id]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>