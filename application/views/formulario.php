<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
<body>
<?= form_open('http://localhost/CodeIgniter/index.php/controlador/recibirdatos') ?>

<?php 
	$numero = array(
		'name' => 'numero',
		'type' => 'number',
		'placeholder' => 'Escribe un numero'

	);
	$B = array(
		'name' => 'B',
		'type' => 'email',
		'placeholder' => 'Escribe tu correro'
	);
	$C = array(
		'name' => 'C',
		'type' => 'number',
		'placeholder' => 'Escribe tu telefono'
	);
	$D = array(
		'name' => 'D',
		'placeholder' => 'Escribir D'
	);
	$E = array(
		'name' => 'E',
		'placeholder' => 'Escribir E'
	);
	$F = array(
		'name' => 'F',
		'type' => 'date',
		'placeholder' => 'Escribir la fecha'
	);
?>
	<?= form_label('Número:',' numero') ?>
		<?= form_input($numero) ?>
	<?= form_label('Correo electrónico','B') ?>	
		<?= form_input($B) ?>
	<?= form_label('Teléfono','C') ?>
		<?= form_input($C) ?>
	<?= form_label('D','D') ?>
		<?= form_input($D) ?>
	<?= form_label('E','E') ?>
		<?= form_input($E) ?>
	<?= form_label('F','F') ?>
		<?= form_input($F) ?>
	<?= form_submit('','Guardar') ?>
<?= form_close() ?>
</body>
</html>