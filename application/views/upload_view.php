

<!-- Slider -->
<div id="main-slider" class="flexslider">
	<ul class="slides" >
		 <?php
            	$directorio= "./files/";
            	if ($dir= opendir($directorio)) {
				while ($archivo = readdir($dir)) {
					if ($archivo !='.' && $archivo !='..') {
						
						$ext = substr($archivo, strrpos($archivo, '.'));
						$ruta= base_url().'files/'.$archivo;
						if ($ext == '.jpg' || $ext == '.jpeg' || $ext == '.png'|| $ext == '.gif') {
							

							echo "
							<li>
				                <img src='$ruta' height='400'>
				              
				              </li>
							";
				            
				              
						}
							
						}
					}
					
				}
			?>
	</ul>
</div>
					<!-- end slider -->
<hr>       


<div align ="center">
	<h2>Subir Archivos</h2>

<?php echo form_open_multipart('upload/do_upload');?>
	<table align="center" >
		<tr>
			<th><input type="file" name="userfile" size="20" class="btn btn-success" /></th>
		

		</tr>
		<br />
		<tr >
			
			<th><center><input type="submit" value="Subir Archivo" class="btn btn-success" /></center></th>
		</tr>
		<br>
	</table>

<?php echo form_close(); ?>
<hr>

</div>
<div align="center" >
	<table class="table table-bordered" >
		<tr class="title-table">
			<th colspan="2"><center>Archivos Almacenados</center></th>
			
		</tr>
		

	<?php
				$directorio= "./files/";
            	if ($dir= opendir($directorio)) {
				while ($archivo = readdir($dir)) {
					if ($archivo !='.' && $archivo !='..') {
						
						$ext = substr($archivo, strrpos($archivo, '.'));
						$ruta= base_url().'files/'.$archivo;
					


						if ($ext == '.pdf') {
							$ruta_file= base_url().'img/fpdf.png';
							echo "
							<tr>
							<td><img src='$ruta_file' width='75' height='70' /><a href='$ruta'>Archivo Pdf  ::  $archivo <a/></td>
							</tr>
							";
							
						}
						if ($ext == '.docx' || $ext == '.doc') {
							$ruta_file= base_url().'img/fdoc.png';
							echo "
							<tr>
							<td><img src='$ruta_file' width='75' height='70' /><a href='$ruta'>Archivo Doc  ::  $archivo <a/></td>
				            </tr>
							";
							
						}
						if ($ext == '.xlsx' || $ext == '.xls') {
							$ruta_file= base_url().'img/fxls.png';
							echo "
							<tr>
							<td><img src='$ruta_file' width='75' height='70' /><a href='$ruta'>Archivo Xls  ::  $archivo <a/></td>
							</tr>
							";
							
						}
						if ($ext == '.pptx' || $ext == '.ppt') {
							$ruta_file= base_url().'img/fppt.png';
							echo "
							<tr>
							<td><img src='$ruta_file' width='75' height='70' /><a href='$ruta'>Archivo Ppt  ::  $archivo <a/></td>
							</tr>
							";
							
						}



						
					}
				}
				
			}
			?>
		
	</table>
</div>

