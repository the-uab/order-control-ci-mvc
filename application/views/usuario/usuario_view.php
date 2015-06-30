
<h3>Registro de Usuarios</h3>
<div align ="center">
	<?php echo form_open('usuario/create'); ?>
	<table>
		<tr>
			<th><label for="nombre">Nombre : </label></th>
			<th><input type="text" name="nombre" id="nombre" value="<?php echo set_value('nombre'); ?>"></th>
			<th class="text-danger"> <p><?php echo form_error('nombre'); ?></p></th>
		</tr>
		<br>
		
		<tr>
			<th><label for="email">Email : </label></th>
			<th><input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>"></th>
			<th class="text-danger"> <p><?php echo form_error('email'); ?></p></th>
		</tr>
		<br>
		
		<tr>
			<th><label for="user">Nombre de Usuario : </label></th>
			<th><input type="text" name="user" id="user" value="<?php echo set_value('user'); ?>"></th>
			<th class="text-danger"> <p><?php echo form_error('user'); ?></p></th>
		</tr>
		<br>
		
		<tr>
			<th><label for="password">Contraseña : </label></th>
			<th><input type="text" name="password" id="password" value="<?php echo set_value('password'); ?>"></th>
			<th class="text-danger"> <p><?php echo form_error('password'); ?></p></th>
		</tr>
		<br>
		

		<tr>
			<th><label for="rol">Rol : </label></th>
			<th>
				<select class="combobox" name="IdRol">
					<option value="0">--Seleccione--</option>
					<?php foreach ($lrol as $val) {
						
						
						echo '<option value='.$val->IdRol.'>'.$val->Rol.'</option>';
						
					}?>
					 
				</select>
			</th>
			<th class="text-danger"> <p><?php echo form_error('IdRol'); ?></p></th>

		</tr>
		<br>


		<tr >
			<th></th>
			<th colspan="2"><button id="submitrol" class="btn btn-success">Registrar</button></th>
		</tr>
		<br>
	</table>

	<?php echo form_close(); ?>


</div>
<hr>
<div class="shor" align="center">

	<table class="table table-bordered">
		<thead>
			<tr class="title-table" >
				<td>Id</td>
				<td>Nombre</td>
				<td>Email</td>
				<td>Nombre de Usuario</td>
				<td>Contraseña</td>
				<td>Rol</td>
				<td colspan="2">Accion</td>
			</tr>
		</thead>
		<tbody>
	<?php foreach ($record as $value) {
		echo '<tr>';
		echo '<td>'.$value->idusuario.'</td>';
		echo '<td>'.$value->nombre.'</td>';
		echo '<td>'.$value->email.'</td>';
		echo '<td>'.$value->user.'</td>';
		echo '<td>'.$value->password.'</td>';
		echo '<td>'.$value->rol.'</td>';
		echo '<td><button class="btn btn-danger">'.anchor('usuario/delete/'.$value->idusuario,'Eliminar').'</button></td>';
		echo '<td><button class="btn btn-warning">'.anchor('usuario/edit/'.$value->idusuario,'Editar').'</button></td>';
		echo '<tr>';
	}?>
		</tbody>
	</table>
</div>

	

<hr>