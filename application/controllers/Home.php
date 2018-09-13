<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('active');
    $this->load->model(array('front/Home_model'));
  }

  function home(){
    $data = array(
      'productos' => $this->Home_model->getProductos()
    );

    $this->load->view('layouts/header');
    $this->load->view('home_header');
    $this->load->view('layouts/navbar');
    $this->load->view('home_main', $data);
    $this->load->view('layouts/footer');
  }

  function about(){
    $this->load->view('layouts/header');
    $this->load->view('layouts/header_main');
    $this->load->view('layouts/navbar');
    $this->load->view('about');
    $this->load->view('layouts/footer');
  }

  function contact(){
    $this->load->view('layouts/header');
    $this->load->view('layouts/header_main');
    $this->load->view('layouts/navbar');
    $this->load->view('contact');
    $this->load->view('layouts/footer');
  }

  function store($id){
    $data = array(
      'producto' => $this->Home_model->getProducto($id)
    );

    $this->load->view('layouts/header');
    $this->load->view('layouts/header_main');
    $this->load->view('layouts/navbar');
    $this->load->view('store', $data);
  }

  

  function sendmail(){
    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'message' => $this->input->post('message')
    );

    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.mailtrap.io',
      'smtp_port' => 2525,
      'smtp_user' => '6f0cbf43d72d0d',
      'smtp_pass' => '6f2e12522f5a9b',
      'crlf' => "\r\n",
      'newline' => "\r\n"
    );

    $this->email->initialize($config);

    $this->email->from($data['email'], $data['name']);
    $this->email->to('ejemplo@ejemplo.com');
    $this->email->message($data['message']);
    $this->email->send();

    echo '<script type="text/javascript">
            alert("Su mensaje ha sido enviada");
        </script>';
    redirect(base_url().'home', 'refresh');
  }

}
