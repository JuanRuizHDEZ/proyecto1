<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
<body>
<script>
</script>
<?= form_open('http://localhost/CodeIgniter/index.php/controlador/modificar/'.$id) ?>
<?php
	$numero = array(
		'name' => 'numero',
		'placeholder' => 'Escribir tu numero',
		'type' => 'number',
		'value' => $resultado->result()[0]->numero
	);
	$B = array(
		'name' => 'B',
		'placeholder' => 'Escribir tu email',
		'value' => $resultado->result()[0]->B
	);
	$C = array(
		'name' => 'C',
		'placeholder' => 'Escribir C',
		'type' => 'number',
		'value' => $resultado->result()[0]->C
	);
	$D = array(
		'name' => 'D',
		'placeholder' => 'Escribir D',
		'value' => $resultado->result()[0]->D
	);
	$E = array(
		'name' => 'E',
		'placeholder' => 'Escribir E',
		'value' => $resultado->result()[0]->E
	);
	$F = array(
		'name' => 'F',
		'type' => 'date',
		'placeholder' => 'Escribir la fecha',
		'value' => $resultado->result()[0]->F
	);
?>
	<?= form_label('Numero:',' numero') ?>
		<?= form_input($numero) ?>
	<?= form_label('B','B') ?>	
		<?= form_input($B) ?>
	<?= form_label('C','C') ?>
		<?= form_input($C) ?>
	<?= form_label('D','D') ?>
		<?= form_input($D) ?>
	<?= form_label('E','E') ?>
		<?= form_input($E) ?>
	<?= form_label('F','F') ?>
		<?= form_input($F) ?>
	<?= form_submit('','Modificar') ?>
<?= form_close() ?>
</body>
</html>