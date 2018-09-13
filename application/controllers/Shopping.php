<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('front/Shopping_model'));
  }

  // Vista del carrito de compras
  function index(){
    $datos['contenido'] = 'carrito';

    $this->load->view('layouts/header');
    $this->load->view('layouts/header_main');
    $this->load->view('layouts/navbar');
    $this->load->view('shopping', $datos);
  }

  function addItem(){
    $data = array(
      'id'      => $this->input->post('id'),
      'qty'     => $this->input->post('qty'),
      'price'   => $this->input->post('price'),
      'name'    => $this->input->post('name')
    );

    // print_r($_POST);

    if ($this->cart->insert($data)) {
        echo "<script>alert('Producto Guardado')</script>";
        redirect(base_url().'Shopping/index', 'refresh');
    } else {
        print_r('Algo va mal!');
      }
  }

  function actualizarCarrito(){
    $data = $this->input->post();

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $this->cart->update($data);
    echo "<script>alert('Se ha actualizado su carrito')</script>";
    redirect(base_url().'Shopping/index', 'refresh');
  }

  function removeItem($rowid){
    $data = array(
      'rowid' => $rowid,
      'qty' => 0
    );

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $this->cart->update($data);
    echo "<script>alert('Producto eliminado')</script>";
    redirect(base_url().'Shopping/index', 'refresh');

  }

  function formEnvio(){

    $data = array(
      'nombre'        => $this->input->post('nombre'),
      'apellidos'     => $this->input->post('apellidos'),
      'correo'        => $this->input->post('correo'),
      'telefono'      => $this->input->post('telefono'),
      'pais'          => $this->input->post('pais'),
      'estado'        => $this->input->post('estado'),
      'municipio'     => $this->input->post('municipio'),
      'cp'            => $this->input->post('cp'),
      'colonia'       => $this->input->post('colonia'),
      'direccion'     => $this->input->post('direccion'),
    );

    if ($this->Shopping_model->addVenta($data)) {
      echo '<script type="text/javascript">
              alert("Su petición ha sido recibida, por favor revise su correo en unos minutos");
            </script>';
      redirect(base_url().'', 'refresh');
    } else {
        echo '<script type="text/javascript">
                alert("Algo va mal, por favor verifique sus datos");
              </script>';
        redirect(base_url().'shopping', 'refresh');
      }

  }
}
