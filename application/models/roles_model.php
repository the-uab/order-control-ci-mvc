<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Roles_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function read_record(){
        $query = $this->db->get('roles');
        return $query->result();
    }

    function add_record($data){
        $this->db->insert('roles',$data);
    }

    function delete_record(){
        $this->db->where('IdRol',$this->uri->segment(3));
        $this->db->delete('roles');
    }

    function edit_record(){
        $this->db->where('IdRol',$this->uri->segment(3));
        $query = $this->db->get('roles');
        return $query->result();

    }

    function update_record($data){
        $this->db->where('IdRol',$data['IdRol']);
        $this->db->update('roles',$data);
    }
 
   
}