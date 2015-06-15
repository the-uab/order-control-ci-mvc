<div align="center">
	
	<?php echo form_open('login/verify'); ?>
	<table>
		<tr >
			<th colspan="2"> <h3>Iniciar Sesion</h3></th>
		</tr>
		<tr>
			<td><label for="usuario">Usuario : </label></td>
			<td><input type="text" name="usuario"></td>
		</tr>
		<tr>
			<td><label for="password">Contraseña : </label></td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<th colspan="2"><button id="submitrol" class="btn btn-success">Registrar</button></th>
		</tr>
	</table>

		<?php echo form_close(); ?>
</div>
<hr>