<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function addVenta($data){
    $datos = array(
      'nombre'      => $data['nombre'],
      'apellidos'   => $data['apellidos'],
      'correo'      => $data['correo'],
      'telefono'    => $data['telefono'],
      'pais'        => $data['pais'],
      'estado'      => $data['estado'],
      'municipio'   => $data['municipio'],
      'cp'          => $data['cp'],
      'colonia'     => $data['colonia'],
      'direccion'   => $data['direccion']
    );

    return $this->db->insert('Clientes', $datos);
  }

}
