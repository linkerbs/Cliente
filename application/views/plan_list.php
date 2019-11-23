<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Planes de internet</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
<br />
<a href = "<?= site_url('plan/add'); ?>" class="waves-effect waves-light btn"><i class="material-icons right">add_circle_outline</i>Agregar un nuevo plan</a>
<br>
<br>




<div class="col s12 m4 l2">
<table class="responsive-table">
	<thead>
		<tr>
			<th>Proveedor</th>
			<th>Velocidad</th>
			<th>Calidad</th>
			<th>Precio</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($plan_list as $list) { ?>
		<tr>
			<td><?php echo $list->proveedor ?></td>
			<td><?php echo $list->velocidad ?></td>
			<td><?php echo $list->calidad ?></td>
			<td><?php echo "$".$list->precio ?></td>
			<td>  <?php echo anchor('plan/edit/'.$list->Id,'Editar','class="waves-effect waves-light btn"><i class="large material-icons right">edit</i') ?> || <?php echo anchor('plan/delete/'.$list->Id,'Eliminar','class="waves-effect red btn"><i class="large material-icons right">delete_forever</i') ?> || <?php echo anchor('plan/view/'.$list->Id,'Ver','class="waves-effect cyan btn"><i class="large material-icons right">remove_red_eye</i') ?></td>
		</tr>
		<?php	} 	?>	
	</tbody>
</table>
<br>
<br>	
<a href = "<?= site_url('plan/'); ?>" class="waves-effect waves-light btn"><i class="material-icons right">update</i>Recargar</a>
</div>
</main>
</body>

</html>


