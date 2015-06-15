
<h3>Registro de Usuarios</h3>
<div align ="center">
	<?php echo form_open('usuario/create'); ?>
	<table>
		<tr>
			<th><label for="nombre">Nombre : </label></th>
			<th><input type="text" name="nombre" id="nombre"></th>
		</tr>
		<tr>
			<th><label for="email">Email : </label></th>
			<th><input type="text" name="email" id="email"></th>
		</tr>
		<tr>
			<th><label for="user">Nombre de Usuario : </label></th>
			<th><input type="text" name="user" id="user"></th>
		</tr>
		<tr>
			<th><label for="password">Contraseña : </label></th>
			<th><input type="text" name="password" id="password"></th>
		</tr>
		<tr >
			
			<th colspan="2"><button id="submitrol" class="btn btn-success">Registrar</button></th>
		</tr>
	</table>

	<?php echo form_close(); ?>

</div>
<div align ="center">
	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Nombre de Usuario</th>
			<th>Contraseña</th>
		</tr>
	<?php foreach ($record as $value) {
		echo '<tr>';
		echo '<th>'.$value->idusuario.'</th>';
		echo '<th>'.$value->nombre.'</th>';
		echo '<th>'.$value->email.'</th>';
		echo '<th>'.$value->user.'</th>';
		echo '<th>'.$value->password.'</th>';
		echo '<th><button class="btn btn-danger">'.anchor('usuario/delete/'.$value->idusuario,'Eliminar').'</button></th>';
		echo '<th><button class="btn btn-warning">'.anchor('usuario/edit/'.$value->idusuario,'Editar').'</button></th>';
		echo '<tr>';
	}?>
	</table>
</div>
<hr>