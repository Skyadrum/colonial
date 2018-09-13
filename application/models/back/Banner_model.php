<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function getBanners(){
    $result = $this->db->query('SELECT * FROM Banners');

    if ( $result->num_rows() > 0 ) {
      return $result->result();
    }
  }

  function getBanner($id){
    $this->db->where('id_banner', $id);
    $result = $this->db->get('Banners');

    return $result->row();
  }

  function newBanner($data){
    $banner = array(
      'nombre' => $data['nombre'],
      'imagen' => $data['imagen']
    );

    $this->db->insert('Banners', $banner);
  }

  function update($id, $data){
    $this->db->where('id_banner', $id);
    return $this->db->update('Banners', $data);
  }

  function delete($id){
    $this->db->where('id_banner', $id);
    $this->db->delete('Banners');
  }

}
