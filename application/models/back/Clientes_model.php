<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function getClientes(){
    $query = $this->db->query('SELECT * FROM Clientes');

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return flase;
    }
  }

  function getInfo($id){
    $this->db->where('id_cliente', $id);
    $result = $this->db->get('Clientes');

    return $result->row();
  }

  function dltCli($id){
    $this->db->delete('Clientes', array('id_cliente' => $id));
  }

}
