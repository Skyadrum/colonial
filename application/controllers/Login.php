<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('back/Users_model'));
  }

  function index(){
    $this->load->view('back/pages/login');
  }

  function login(){
    $user = $this->input->post('usuario');
    $pass = $this->input->post('password');

    $resp = $this->Users_model->inicio($user, $pass);

    if (!$resp) {
        redirect(base_url().'admin');
    } else {
        $data = array(
          'id'       => $resp->id_usuario,
          'img'      => $resp->usr_img,
          'nombre'   => $resp->nombre,
          'usuario'  => $resp->usuario,
          'rol'      => $resp->fk_roles,
          'login'    => TRUE
        );

        $this->session->set_userdata($data);

        if ($data['rol'] == 1) {
          redirect(base_url().'dashboard');
        }
        elseif ($data['rol'] == 4) {
          redirect(base_url().'back/dashboard/dash2');
        }
    }
  }

  function salir() {
      $this->session->sess_destroy();
      redirect(base_url().'login');
  }

}
