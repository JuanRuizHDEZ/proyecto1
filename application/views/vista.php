<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla</title>
	<link rel="stylesheet" type="text/css" href="tabla.css">
	<style>
	body{
		background-color: #632432;
		font-family: Arial;
	}
	#contenedor{
		margin: 6%;
		width: 80%;
	}
	table{
		background-color: white;
		width: 100%;
		text-align: center;
	}
	th,td{
		padding: 1%;
	}
	
	tr:nth-child(even){
		background-color: #ddd;
	}
	tr:hover td{
		background-color: #369681;
		color: white;
	}
	</style>
</head>
<body>
<div id="contenedor">
<?php if($resultado){ ?>
	<table>
		<thead>
			<tr><th>Número</th><th>Correo electrónico</th><th>Teléfono</th><th>D</th><th>E</th><th>F</th><th></th><th>acciones</th><th></th></tr>
		</thead>
<?php
		foreach ($resultado->result() as $resultado) {
?>
	 	<tr>
	 		<td><?= $resultado->numero; ?></td> <td><?= $resultado->B; ?></td> <td><?= $resultado->C; ?></td> <td><?= $resultado->D; ?></td> <td><?= $resultado->E; ?></td> <td><?= $resultado->F; ?></td>
	 		<td><a href="http://localhost/CodeIgniter/index.php/controlador/modificardatos/<?= $resultado->id_datos; ?>">Modificar</a></td> <td><a href="http://localhost/CodeIgniter/index.php/controlador/eliminardatos/<?= $resultado->id_datos; ?>">Eliminar</a></td> <td><a href="http://localhost/CodeIgniter/index.php/controlador/vistar/<?= $resultado->id_datos; ?>">consulta</a></td>
	 	</tr>
<?php 
		}
	}else{
		echo "hubo problemas al mostar la vista";
	}

?>
	</table>
	<a href="http://localhost/CodeIgniter/index.php/controlador/nuevo">Nuevo</a> <a href="http://localhost/CodeIgniter/index.php/controlador/vistar">Todos</a>
</div>
<?php/* form_submit('','Nuevo')*/ ?>
</body>
</html>