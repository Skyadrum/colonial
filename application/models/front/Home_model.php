<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function getProductos(){
    $query = $this->db->query('SELECT * FROM Productos');

    if ($query->num_rows() > 0) {
        return $query->result();
    }

  }

  function getProducto($id){
    $this->db->where('id_producto', $id);
    $producto = $this->db->get('Productos');

    return $producto->row();
  }

  function num_products(){
    return $this->db->get('Productos')->num_rows();
  }

  function get_products($per_page){
    $datos = $this->db->get('Productos', $per_page, $this->uri->segment(3));

    return $datos->result();

  }

}
