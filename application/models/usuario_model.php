<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function read_record(){
        //$query = $this->db->get('usuario');
        //return $query->result();

        $query = $this->db
        ->select("u.idusuario,u.nombre,u.email,u.user,u.password,r.rol")
        ->from("usuario as u")
        ->join("roles as r","u.IdRol = r.IdRol","inner")
        ->get();
          return $query->result();


    }

    function add_record($data){
        $this->db->insert('usuario',$data);
    }

    function delete_record(){
        $this->db->where('idusuario',$this->uri->segment(3));
        $this->db->delete('usuario');
    }

    function edit_record(){
        $this->db->where('idusuario',$this->uri->segment(3));
        $query = $this->db->get('usuario');
        return $query->result();

    }

    function update_record($data){
        $this->db->where('idusuario',$data['idusuario']);
        $this->db->update('usuario',$data);
    }

    public function validar($us,$pss){
        
     
         $query = $this->db->get_where('usuario',array(
            'user' => $us,
            'password' => $pss));
        if ($query->num_rows() == 1) {
            return true;
        }
        else{
            return false;
        }
    }

     
 
   
}