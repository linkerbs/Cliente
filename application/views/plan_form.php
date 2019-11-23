<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Agregando plan</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"  media="screen,projection"/>
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
<?php echo form_open('plan/save') ?>
<h3>Agregando registro</h3>
<table>
	<tr>
	<td><label for="proveedor"><b>Proveedor:</b></label> </td>
		<td><?php echo form_input('proveedor','',array('placeholder'=>'proveedor')) ?></td>
	</tr>
	<tr>
	<td><label for="velocidad"><b>Velocidad:</b></label> </td>
		<td><?php echo form_input('velocidad','',array('placeholder'=>'velocidad')) ?></td>
	</tr>		
	<tr>
	<td><label for="calidad"><b>Calidad:</b></label> </td>
		<td><?php echo form_input('calidad','',array('placeholder'=>'calidad')) ?></td>
	</tr>
	<tr>
		<td><label for="precio"><b>Precio:</b></label> </td>
		<td><?php echo form_input('precio','',array('placeholder'=>'precio')) ?></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo form_submit('submit', 'Guardar','class="waves-effect waves-light btn"');?> <a href = "<?= site_url('plan/'); ?>" class="waves-effect waves-light btn"><i class="material-icons right">arrow_back</i>Volver</a></td>
	</tr>
</table>
<?php echo form_close(); ?>	
</main>
</body>
<footer class="page-footer grey darken-1">

          <div class="container" >
            <div class="row">
              <div class="col s12">
                <h5 class="white-text">Footer para que se vea bonito</h5>
                <p class="grey-text text-lighten-4">Contactenos pls.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © Parcial 3 2019 
            </div>
          </div>
</footer>
</html>


