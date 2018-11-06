<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('back/Users_model'));
  }

  function listado(){
    $datos = array(
      'users' => $this->Users_model->getUsers()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/users/users_list', $datos);
    $this->load->view('back/layouts/header');
  }

  function form(){
    $datos = array(
      'roles' => $this->Users_model->getRoles()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/users/users_form', $datos);
    $this->load->view('back/layouts/header');
  }

  function edit($id){
    $datos = array(
      'usuario' => $this->Users_model->getUser($id),
      'roles' => $this->Users_model->getRoles()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/users/users_edit', $datos);
    $this->load->view('back/layouts/header');

  }

  function newUser(){
    $data = array();

    $data['usr_name'] = $this->input->post('usr_name');
    $data['correo']   = $this->input->post('correo');
    $data['usuario']  = $this->input->post('usuario');
    $data['password'] = $this->input->post('password');
    $data['fk_roles'] = $this->input->post('fk_roles');


    $config = array(
      'upload_path'   => './media/users',
      'allowed_types' => 'png|jpg'
    );

    //Hacemos uso de la libreria upload
    $this->load->library('upload' , $config);

    if (!$this->upload->do_upload('usr_img')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['usr_img'] = $fileData['file_name'];
    }

    if ($this->Users_model->addUser($data)) {
        $this->session->set_flashdata('error', 'Datos invalidos o incorrectos');
        redirect(base_url().'usuarios/agregar');
    } else {
        echo "<script>alert('Usuario agregado exitosamente')</script>";
        redirect(base_url().'usuarios');
    }

  }

  function upUser(){
    $id_usr = $this->input->post('id_usuario');
    $data = array();

    $data['usr_name'] = $this->input->post('usr_name');
    $data['correo']   = $this->input->post('correo');
    $data['usuario']  = $this->input->post('usuario');
    $data['password'] = $this->input->post('password');
    $data['fk_roles'] = $this->input->post('fk_roles');


    $config = array(
      'upload_path'   => './media/users',
      'allowed_types' => 'png|jpg'
    );

    //Hacemos uso de la libreria upload
    $this->load->library('upload' , $config);

    if (!$this->upload->do_upload('usr_img')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['usr_img'] = $fileData['file_name'];
    }

    if ($this->Users_model->update($id_usr, $data)) {
        echo "<script>alert('Usuario agregado exitosamente')</script>";
        redirect(base_url().'usuarios');
    } else {
        $this->session->set_flashdata('error', 'Datos invalidos o incorrectos');
        redirect(base_url().'usuarios/agregar');
    }

  }

  function eliminar($id){
    $this->Users_model->rmUser($id);
    redirect(base_url().'usuarios');
  }

}
