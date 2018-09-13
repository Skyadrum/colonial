<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/dashboard');
    $this->load->view('back/layouts/footer');

  }

}
