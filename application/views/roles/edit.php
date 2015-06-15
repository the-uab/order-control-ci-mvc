
<h3>Edicion de Roles</h3>
<div align ="center">
	<?php echo form_open('roles/update'); foreach($record as $value) {?>
	<table>
		<tr>
			<th></th>
			<th><input type="hidden" name="IdRol" id="IdRol" value="<?php echo $value->IdRol; ?>"></th>
		</tr>
		<tr>
			<th><label for="rol">Rol : </label></th>
			<th><input type="text" name="rol" id="rol" value="<?php echo $value->Rol; ?>"></th>
		</tr>
		<tr >
			
			<th colspan="2"><button id="submitrol" class="btn btn-success">Registrar</button></th>
		</tr>
	</table>

	<?php } echo form_close(); ?>

</div>

<hr>