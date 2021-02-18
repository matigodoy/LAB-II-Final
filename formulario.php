<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="codigo">Código de barras:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="nombre">Nombre:</label>
		<textarea required id="nombre" name="nombre" cols="30" rows="1" class="form-control"></textarea>

		<label for="autor">Autor:</label>
		<textarea required id="autor" name="autor" cols="30" rows="1" class="form-control"></textarea>

		<label for="editorial">Editorial:</label>
		<textarea required id="editorial" name="editorial" cols="30" rows="1" class="form-control"></textarea>

		<label for="descripcion">Descripción:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"></textarea>

		<label for="precioVenta">Precio de venta:</label>
		<input class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

		
		
		
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>