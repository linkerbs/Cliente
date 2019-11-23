<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Editando plan</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<div class="navbar-fixed">
    <nav class="cyan lighten-4">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Sistema de internet</a>
      </div>
    </nav>
  </div>
<body>
	<main>
	<h4>Editando plan de:<?php echo $plan['proveedor'] ?> </h4>
	<?php echo form_open('plan/save_edit') ?>
<?php echo form_hidden('Id',$plan['Id']) ?>
<table>


	<tr>
		<td>Proveedor</td>
		<td><?php echo form_input('proveedor',$plan['proveedor'],array('placeholder'=>'proveedor')) ?></td>
	</tr>
	<tr>
		<td>Velocidad</td>
		<td><?php echo form_input('velocidad',$plan['velocidad'],array('placeholder'=>'velocidad')) ?></td>
	</tr>		
	<tr>
		<td>Calidad</td>
		<td><?php echo form_input('calidad',$plan['calidad'],array('placeholder'=>'calidad')) ?></td>
	</tr>
	<tr>
		<td>Precio</td>
		<td><?php echo form_input('precio',$plan['precio'],array('placeholder'=>'precio')) ?></td>
	</tr>
	<tr>
	<td colspan="2"><?php echo form_submit('submit', 'Actualizar','class="waves-effect waves-light btn"');?> <a href = "<?= site_url('plan/'); ?>" class="waves-effect waves-light btn"><i class="material-icons right">arrow_back</i>Volver</a></td>
	</tr>
</table>
<?php echo form_close(); ?>
	</main>
</body>
</html>







