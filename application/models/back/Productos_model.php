<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function getProductos(){
    $query = $this->db->query('SELECT * FROM Productos');

    if ( $query->num_rows() > 0 ) {
        return $query->result();
    }
  }

  function getProducto($id){
    $this->db->where('id_producto', $id);
    $result = $this->db->get('Productos');

    return $result->row();
  }

  function newProducto($data){
    $producto = array(
      'imagen'       => $data['imagen'],
      'nombre'       => $data['nombre'],
      'precio'       => $data['precio'],
      'descripcion'  => $data['descripcion'],
      'stock'        => $data['stock'],
      'imagen'       => $data['imagen'],
      'img1'         => $data['img1'],
      'img2'         => $data['img2'],
      'img3'         => $data['img3']

    );

    $this->db->insert('Productos', $producto);
  }

  function update($id, $data){
    $this->db->where('id_producto', $id);
    return $this->db->update('Productos', $data);
  }

  function delete($id){
    $this->db->where('id_producto', $id);
    $this->db->delete('Productos');
  }
}
