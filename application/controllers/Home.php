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

  function home($page=''){
    $config['base_url'] = base_url().'home/';

    $config['use_page_numbers'] = TRUE;
    $page = ($page!='')? $page : 0;
    $config["cur_page"] = $page;

    $config['total_rows'] = $this->Home_model->num_products();
    $config['per_page'] = 2;
    $config['num_links'] = 5;

    $config['full_tag_open'] = '<div class="pagination">';
    $config['full_tag_close'] = '</div>';

    $config['cur_tag_open'] = '<a class="active">';
    $config['cur_tag_close'] = '</a>';

    $config['first_link'] = '«';
    // $config['prev_link'] = '‹ Prev';
    $config['prev_link'] = 'Prev';

    $config['last_link'] = '»';
    // $config['next_link'] = 'Next ›';
    $config['next_link'] = 'Next';

    // $config['first_tag_open'] = '<a class="previous">';
    // $config['first_tag_close'] = '</a>';
    //
    // $config['last_tag_open'] = '<a class="next">';
    // $config['last_tag_close'] = '</a>';

    $this->pagination->initialize($config);

    $data = array(
      'productos'   => $this->Home_model->get_products($config['per_page']),
      'paginacion'  => $this->pagination->create_links()
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
    redirect(base_url().'', 'refresh');
  }

}
