<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roles extends CI_Controller {

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
        $value['record']= $data;
        }
        $this->load->view('header');
        $this->load->view('navbar',$sesion);
        $this->load->view('roles/rol_view',$value);
        $this->load->view('footer');
	}

    function create(){
        $data = array('rol'=>$this->input->post('rol'));

        if(!empty($data['rol'])){
            $this->roles_model->add_record($data);
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
        $this->roles_model->delete_record();
        $this->index();
    }

    function edit(){
        $value =array();
        if ($data = $this->roles_model->edit_record()) {
            $value['record'] = $data;
        }

        $this->load->view('header');

        $this->load->view('roles/edit',$value);
        $this->load->view('footer');
    }

    function update(){
        $data = array('IdRol'=>$this->input->post('IdRol'),
            'rol'=>$this->input->post('rol')
            );
        if(!empty($data['rol'])){
            $this->roles_model->update_record($data);
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