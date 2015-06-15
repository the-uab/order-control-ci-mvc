<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->verify();
    }

	public function index()
	{
		$sesion['user']= "Bienvenido : ".$this->session->userdata('user');
		
		//$this->load->view('inicio_view');
		 $this->load->view('header');
        $this->load->view('navbar',$sesion);
        $this->load->view('banner');
      
        $this->load->view('footer');
	}
	function verify(){
		if (!$this->session->userdata('user')) {
			redirect(base_url().'login');
		}
	}
}
