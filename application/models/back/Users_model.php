<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function inicio($user, $pass){
    $this->db->where('usuario', $user);
    $this->db->where('password', $pass);

    $result = $this->db->get('Usuarios');

    if ($result->num_rows() > 0) {
        return $result->row();
    } else {
      return false;
    }
  }

  function getRoles(){
    $query = $this->db->query('SELECT * FROM Roles');

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  function getUsers(){
    $query = $this->db->query(
      'SELECT * FROM Usuarios as usr
       INNER JOIN Roles as rls ON usr.fk_roles = rls.id_rol'
    );

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
        return false;
      }
  }

}
