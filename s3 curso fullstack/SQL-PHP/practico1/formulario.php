<?php

    require_once('conexion.php');

    $consulta = $conexion->prepare('SELECT id, name FROM GENRES');
    $consulta->execute();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Pelicula</title>
	
</head>

<body>
	<form method="post" action="guardar.php">
		<div>
			<label>Titulo</label>
			<input type="text" name="title" >
		</div>
		<div>
			<label>Rating</label>
			<input type="text" name="rating" >
		</div>
		<div>
			<label>Premios</label>
			<input type="text" name="awards" >
		</div>
		<div>
			<label>Duracion</label>
			<input type="text" name="length" >
		</div>
		<div>
			<label>Fecha de Estreno</label> <br>
			<i>Año: </i>
			<select name="year">
				<?php for ($i=2018; $i >= 1920; $i--) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>Mes: </i>
			<select name="month">
				<?php for ($i=1; $i < 13; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			
			<select name="day">
				<?php for ($i=1; $i < 32; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
            </select>
            <br>
            <label for="genre">Genero</label>
            <select name="genre_id">
                <?php $result = $consulta->fetch(PDO::FETCH_ASSOC); ?>
                <?php while ($result) { ?>
                    <option value="<?=$result["id"]?>"><?=$result["name"]?></option>
                <?php $result = $consulta->fetch(PDO::FETCH_ASSOC); ?>
                <?php } ?>
            </select>
            
		</div>
		<button type="submit">Guardar película</button>
	</form>
</body>

</html>