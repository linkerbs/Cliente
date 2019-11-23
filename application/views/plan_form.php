<?php echo form_open('plan/save') ?>
<table>
	<tr>
		<td>Proveedor</td>
		<td><?php echo form_input('proveedor','',array('placeholder'=>'proveedor')) ?></td>
	</tr>
	<tr>
		<td>Velocidad</td>
		<td><?php echo form_input('velocidad','',array('placeholder'=>'velocidad')) ?></td>
	</tr>		
	<tr>
		<td>Calidad</td>
		<td><?php echo form_input('calidad','',array('placeholder'=>'calidad')) ?></td>
	</tr>
	<tr>
		<td>Precio</td>
		<td><?php echo form_input('precio','',array('placeholder'=>'precio')) ?></td>
	</tr>
	<tr>
		<td colspan="2"> <hr><?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('plan','Back') ?></td>
	</tr>
</table>
<?php echo form_close(); ?>