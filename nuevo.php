<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["precioVenta"]) || !isset($_POST["existencia"]) || !isset($_POST["autor"]) || !isset($_POST["editorial"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["precioVenta"];
$existencia = $_POST["existencia"];


$sentencia = $base_de_datos->prepare("INSERT INTO productos(codigo, nombre, autor, editorial, descripcion, precioVenta, existencia) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$codigo, $nombre, $autor, $editorial, $descripcion, $precioVenta, $existencia]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>