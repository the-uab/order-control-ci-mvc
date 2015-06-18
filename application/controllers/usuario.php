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
        }
        $this->index();
    }

    function delete(){
        $this->usuario_model->delete_record();
        $this->index();
    }

    function edit(){
        $value =array();
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