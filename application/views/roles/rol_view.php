
<h3>Registro de Roles</h3>
<div align ="center">
	<?php echo form_open('roles/create'); ?>
	<table>
		
		<tr>
			<th><label for="rol">Rol : </label></th>
			<th><input type="text" name="rol" id="rol" value="<?php echo set_value('rol',''); ?>"></th>
			<th class="text-danger"> <p><?php echo form_error('rol'); ?></p></th>
		</tr>
		<br />
		<tr >
			
			<td colspan="3" ><button id="submitrol" class="btn btn-success">Registrar</button></td>
		</tr>
		<br>
	</table>

	<?php echo form_close(); ?>

</div>
<hr>
<div align ="center" class="shor">
	<table class="table table-bordered">
		<tr class="title-table">
			<th>Id</th>
			<th>Rol</th>
			<td colspan="2">Accion</td>
		</tr>
	<?php foreach ($record as $value) {
		echo '<tr>';
		echo '<th>'.$value->IdRol.'</th>';
		echo '<th>'.$value->Rol.'</th>';
		echo '<th><button class="btn btn-danger">'.anchor('roles/delete/'.$value->IdRol,'Eliminar').'</button></th>';
		echo '<th><button class="btn btn-warning">'.anchor('roles/edit/'.$value->IdRol,'Editar').'</button></th>';
		echo '<tr>';
	}?>
	</table>
</div>
<hr>