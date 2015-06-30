<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
       
    }
    
	public function index()
	{
        $sesion['user']= "Bienvenido : ".$this->session->userdata('user');
        
        $value =array();
       if($data = $this->roles_model->read_record())
        {
        $value['lrol']= $data;
        }

        
        if($data = $this->usuario_model->read_record())
        {
        $value['record']= $data;
        }
        $this->load->view('header');
        $this->load->view('navbar',$sesion);
        $this->load->view('usuario/usuario_view',$value);
        $this->load->view('footer');
	}

    function create(){

        $data = array('nombre'=>$this->input->post('nombre'),
            'email'=>$this->input->post('email'),
            'user'=>$this->input-> post('user'),
            'password'=> sha1($this->input->post('password')),
            'IdRol'=>$this->input->post('IdRol'),

            );

        $this->form_validation->set_rules('nombre', ' Nombre', 'required|trim|callback_alfabetico');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|trim');
        $this->form_validation->set_rules('user', 'Usuario', 'required|alpha|trim');
        $this->form_validation->set_rules('password', 'Contraseña', 'min_length[5]|required|alpha_numeric|trim');
        $this->form_validation->set_rules('IdRol', 'Id del Rol', 'callback_rol_validate');

        
        $this->form_validation->set_message('required','El campo %s es requerido');
        $this->form_validation->set_message('valid_email','El campo %s no es valido');
        $this->form_validation->set_message('alpha_numeric','El campo %s tiene que contener valores alfabeticos y numericos');
        $this->form_validation->set_message('min_length','El campo %s tiene que tener como minimo 5 caracteres');
        $this->form_validation->set_message('alpha','El campo %s tiene no tiene que contener numeros');




                if ($this->form_validation->run() == true)
                {
                     $this->usuario_model->add_record($data);
                        echo "
                            <script language='JavaScript'>
                            alert('Se registro correctamente');
                            </script>";
                        $this->form_validation->clear_field_data();
                }

        /*
        if(!empty($data['nombre']) && !empty($data['email']) && !empty($data['user']) && !empty($data['password']) ){
            $this->usuario_model->add_record($data);
            echo "
                <script language='JavaScript'>
                alert('Se registro correctamente');
                </script>";

        }else{
             echo "
                <script language='JavaScript'>
                alert('No deje ningun campo del formulario vacio');
                </script>";
           // echo "No deje ningun campo del formulario vacio";
        }*/
        $this->index();
    }

    public function rol_validate(){

        $valor=$this->input->post('IdRol');
       
        if ($valor==0) {
            $this->form_validation->set_message('rol_validate','Seleccione una opcion!!!');
            return false;

        }else{

            return true;
        }
        
    }

    

    public function alfabetico()
    {
         $valor=$this->input->post('nombre');
          $permitidos = '/^[A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50}$/i';
          
               if (preg_match($permitidos,$valor))
              {
                    return true; // Campo permitido 
              } 
              else 
              { 
                    $this->form_validation->set_message('alfabetico','El campo %s no tiene que tener numeros..');
                    return false; // Error uno de los caracteres no hace parte de la expresión regular 
              } 
         
    } 

    function delete(){
        $this->usuario_model->delete_record();
        $this->index();
    }

    function edit(){
        $value =array();

        if($data = $this->roles_model->read_record())
        {
        $value['lrol']= $data;
        }

        if ($data = $this->usuario_model->edit_record()) {
            $value['record'] = $data;
        }

        $this->load->view('header');

        $this->load->view('usuario/edit',$value);
        $this->load->view('footer');
    }

    function update(){
        $data = array('idusuario'=>$this->input->post('idusuario'),
            'nombre'=>$this->input->post('nombre'),
            'email'=>$this->input->post('email'),
            'user'=>$this->input->post('user'),
            'password'=> sha1($this->input->post('password')),
            'IdRol'=>$this->input->post('IdRol'),
            );
        if(!empty($data['nombre']) && !empty($data['email']) && !empty($data['user']) && !empty($data['password'])){
            $this->usuario_model->update_record($data);
            echo "
                <script language='JavaScript'>
                alert('Se edito correctamente');
                </script>";

        }else{
             echo "
                <script language='JavaScript'>
                alert('No deje ningun campo del formulario vacio');
                </script>";

           // echo "No deje ningun campo del formulario vacio";
        }
        $this->index();
    }
}