<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Editando</title>
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
    
	<h4> Viendo plan de: <?php echo $plan['proveedor'] ?> </h4>
	<table>
	<tr>
		<td>Proveedor</td>
		<td><?php echo form_input('proveedor',$plan['proveedor'],array('placeholder'=>'proveedor','readonly'=>'readonly')) ?></td>
	</tr>
	<tr>
		<td>Velocidad</td>
		<td><?php echo form_input('velocidad',$plan['velocidad'],array('placeholder'=>'velocidad','readonly'=>'readonly')) ?></td>
	</tr>		
	<tr>
		<td>Calidad</td>
		<td><?php echo form_input('calidad',$plan['calidad'],array('placeholder'=>'calidad','readonly'=>'readonly')) ?></td>
	</tr>
	<tr>
		<td>Precio</td>
		<td><?php echo form_input('precio',$plan['precio'],array('placeholder'=>'precio','readonly'=>'readonly')) ?></td>
	</tr>
	<tr>
		<td colspan="2"><a href = "<?= site_url('plan/'); ?>" class="waves-effect waves-light btn"><i class="material-icons right">arrow_back</i>Volver</a></td>
	</tr>
</table>
	</main>
</body>

</html>
