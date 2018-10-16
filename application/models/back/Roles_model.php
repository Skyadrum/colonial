<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function getRoles(){
    $query = $this->db->query('SELECT * FROM Roles');

    if ($query->num_rows() > 0) {
       return $query->result();
    } else {
        return false;
      }
  }

  function createRol($data){
    $data = array(
      'nombre' => $data['nombre']
    );

    return $this->db->insert('Roles', $data);
  }

}
