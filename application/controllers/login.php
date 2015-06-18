<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       
    }
    
	public function index()
	{

        $this->load->view('header');
        $this->load->view('navbar_login');
      
        $this->load->view('login_view');
        $this->load->view('footer');
        
	}

   

    public function verify(){
       $data = array('usuario'=>$this->input->post('usuario'),
            'password'=>sha1($this->input->post('password'))
           

            );

        if(!empty($data['usuario'])  &&  !empty($data['password']) ){
            //$this->usuario_model->add_record($data);
            $us=$data['usuario'];
            $pss=$data['password'];
           
            $band=$this->usuario_model->validar($us,$pss);
            if ($band == true) {
                
                
                 //echo "Bienvenido".$us."---".$pss;
                $var = array(
                        'user' => $this->input->post('usuario'));
                $this->session->set_userdata($var);
                redirect(base_url().'inicio');
            }
            else{
             echo "
                <script language='JavaScript'>
                alert('Usuario o contraseña incorrectos');
                </script>";
                 redirect(base_url().'login');
           // echo "No deje ningun campo del formulario vacio";
        }

        }else{
             echo "
                <script language='JavaScript'>
                alert('No deje ningun campo del formulario vacio');
                </script>";
                 redirect(base_url().'login');
           // echo "No deje ningun campo del formulario vacio";
        }
       
        
    }

     public function logout()
        {
            $this->session->unset_userdata(array('login' => ''));
            $this->session->sess_destroy("user");
            redirect(base_url().'login');
        }

    
}