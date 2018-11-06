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

  function getUser($id){
    $this->db->where('id_usuario', $id);
    $resultado = $this->db->get('Usuarios');

    return $resultado->row();
  }

  function update($id, $data){
    $this->db->where('id_usuario', $id);
    return $this->db->update('Usuarios', $data);
  }

  function addUser($data){
    $datos = array(
      'usr_img'   => $data['usr_img'],
      'usr_name'  => $data['usr_name'],
      'correo'    => $data['correo'],
      'usuario'   => $data['usuario'],
      'password'  => $data['password'],
      'fk_roles'  => $data['fk_roles'],
    );

    $this->db->insert('Usuarios', $datos);
  }

  function rmUser($id){
    $this->db->where('id_usuario', $id);
    $this->db->delete('Usuarios');
  }

}
