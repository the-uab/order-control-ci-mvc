<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {


 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {		

        	$sesion['user']= "Bienvenido : ".$this->session->userdata('user');
        		
        		/*  $directorio= "./files/";
        		  if ($dir= opendir($directorio)) {
			        	    
							while ($archivo = readdir($dir)) {
								if ($archivo !='.' && $archivo !='..') {
									
									$ext = substr($archivo, strrpos($archivo, '.'));

									switch ($ext) {
										case '.jpg':
											
											break;
										case '.png':
											
											break;
										case '.gif':
											
											break;
										case '.pdf':
											
											break;
										case '.docx':
											
											break;
										case '.xlsx':
											
											break;
										case '.pptx':
											
											break;
										
										default:
											
											break;
									}
									
								}
							}
							
						}*/

        		$this->load->view('header');
		        $this->load->view('navbar',$sesion);
		        $this->load->view('upload_view');
		        $this->load->view('footer');
                
        }

        public function do_upload()
        {
                $config['upload_path']          = './files/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc|xls|ppt|docx|xlsx|pptx';
                $config['max_size']             = 4096;
                $config['max_width']            = 2048;
                $config['max_height']           = 2048;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                        
                		echo "
			                <script language='JavaScript'>
			                alert('Error al subir');
			                </script>";
                         $this->index();
                }
                else
                {
                	  echo "
			                <script language='JavaScript'>
			                alert('El archivo subio correctamente');
			                </script>";
                        //$data = array('upload_data' => $this->upload->data());
			      


                         $this->index();
                }
        }
}
