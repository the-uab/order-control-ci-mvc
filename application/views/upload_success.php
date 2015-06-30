
<h3>Your file was successfully uploaded!</h3>

<ul>

<?php
				$directorio= "./files/";
            	if ($dir= opendir($directorio)) {
				while ($archivo = readdir($dir)) {
					if ($archivo !='.' && $archivo !='..') {
						
						$ext = substr($archivo, strrpos($archivo, '.'));
						if ($ext == '.jpg') {
							echo $archivo;
							?>

						
							<li>
				                <img src="<?php echo base_url().'/files/$archivo' ?>" alt="" />
				              
				              </li>
				              <?php
						}
						
					}
				}
				
			}
			?>
</ul>

 <img src="<?php echo base_url().'/files/7e1.jpg' ?>" alt="" />
				              

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>