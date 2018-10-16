<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('back/Roles_model'));
  }

  function listado(){
    $datos = array(
      'roles' => $this->Roles_model->getRoles()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/roles/roles_list', $datos);
    $this->load->view('back/layouts/footer');
  }

  function form(){
    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/roles/roles_form');
    $this->load->view('back/layouts/footer');
  }

  function new_rol(){
    $data = array(
      'nombre' => $this->input->post('nombre')
    );

    //Enviamos los datos al metodo guardar del modelo.
    if ( $this->Roles_model->createRol($data) ) {
      echo "<script>alert('Se a creado un nuevo rol!')</script>";
      redirect(base_url().'roles', 'refresh');
    } else {
      $this->session->set_flashdata('error', 'Algo va mal! Intentelo nuevamente');
      redirect(base_url().'roles/agregar', 'refresh');
    }

  }



}
