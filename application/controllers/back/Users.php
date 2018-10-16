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

}
