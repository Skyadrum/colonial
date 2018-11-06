<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('back/Clientes_model'));
  }

  function listado(){
    $datos = array(
      'clientes' => $this->Clientes_model->getClientes()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/clientes/clientes_list', $datos);
    $this->load->view('back/layouts/footer');
  }

  function cliInfo($id){
    $datos = array(
      'cliente' =>  $this->Clientes_model->getInfo($id)
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/clientes/clientes_info', $datos);
    $this->load->view('back/layouts/footer');
  }

  function rmCli($id){
    $this->Clientes_model->dltCli($id);
    redirect(base_url().'clientes');
  }

}
