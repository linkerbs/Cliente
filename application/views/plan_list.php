<h2>List of <?php echo $title; ?></h2>
<hr />
<?php echo anchor('plan/add','NEW PRODUCT'); ?>
<br/>
<br>
<table border="1">
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
			<td> <?php echo anchor('plan/edit/'.$list->Id,'Edit') ?> || <?php echo anchor('plan/delete/'.$list->Id,'Delete') ?></td>
		</tr>
		<?php	} 	?>	
	</tbody>
</table>
