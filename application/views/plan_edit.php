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
		<td colspan="2"> <hr><?php echo form_submit('submit', 'Actualizar plan'); ?> <?php echo anchor('plan','Back') ?></td>
	</tr>
</table>
<?php echo form_close(); ?>