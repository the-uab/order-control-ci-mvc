
<h3>Edicion de Usuario</h3>
<div align ="center">
	<?php echo form_open('usuario/update'); foreach($record as $value) {?>
	<table>
		<tr>
			<th></th>
			<th><input type="hidden" name="idusuario" id="idusuario" value="<?php echo $value->idusuario; ?>"></th>
		</tr>
		<tr>
			<th><label for="nombre">Nombre : </label></th>
			<th><input type="text" name="nombre" id="nombre" value="<?php echo $value->nombre; ?>"></th>
		</tr>

		<tr>
			<th><label for="email">Email : </label></th>
			<th><input type="text" name="email" id="email" value="<?php echo $value->email; ?>"></th>
		</tr>

		<tr>
			<th><label for="user">Nombre de Usuario : </label></th>
			<th><input type="text" name="user" id="user" value="<?php echo $value->user; ?>"></th>
		</tr>

		<tr>
			<th><label for="password">Contraseña : </label></th>
			<th><input type="text" name="password" id="password" value="<?php echo $value->password; ?>"></th>
		</tr>

		<tr >
			
			<th colspan="2"><button id="submitrol" class="btn btn-success">Registrar</button></th>
		</tr>
	</table>

	<?php } echo form_close(); ?>

</div>

<hr>