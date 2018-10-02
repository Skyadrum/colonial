<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('back/Productos_model'));
  }

  //VIEWS

  function form(){
    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/productos/form');
    $this->load->view('back/layouts/footer');
  }

  function listado(){
    $data = array(
      'productos' => $this->Productos_model->getProductos()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/productos/listado', $data);
    $this->load->view('back/layouts/footer');
  }

  function editar($id){
    $data = array( 'producto' => $this->Productos_model->getProducto($id) );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/productos/edit', $data);
    $this->load->view('back/layouts/footer');
  }


  // CRUD
  function agregar(){
    $data = array();

    $config = array(
      'upload_path'   => './media/productos',
      'allowed_types' => 'png|jpg|jpeg'
    );

    $this->load->library('upload' , $config);

    if (!$this->upload->do_upload('imagen')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['imagen'] = $fileData['file_name'];
    }

    if (!$this->upload->do_upload('img1')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['img1'] = $fileData['file_name'];
    }

    if (!$this->upload->do_upload('img2')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['img2'] = $fileData['file_name'];
    }

    if (!$this->upload->do_upload('img3')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['img3'] = $fileData['file_name'];
    }

    $data['nombre'] = $this->input->post('nombre');
    $data['precio'] = $this->input->post('precio');
    $data['descripcion'] = $this->input->post('descripcion');
    $data['stock'] = $this->input->post('stock');


    if ( $this->Productos_model->newProducto($data) ) {
        $this->session->set_flashdata('error', 'Datos invalidos o incorrectos');
        redirect(base_url().'back/Productos/form');
    } else {
        echo '<script type="text/javascript">
                alert("Producto agregado correctamente");
              </script>';
        redirect(base_url().'back/Productos/listado', 'refresh');
    }
  }

  function actualizar(){
    $id_producto = $this->input->post('id_producto');

    $data = array();

    $config = array(
      'upload_path'   => './media/productos',
      'allowed_types' => 'png|jpg|jpeg'
    );

    $this->load->library('upload' , $config);

    if (!$this->upload->do_upload('imagen')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['imagen'] = $fileData['file_name'];
    }

    if (!$this->upload->do_upload('img1')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['img1'] = $fileData['file_name'];
    }

    if (!$this->upload->do_upload('img2')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['img2'] = $fileData['file_name'];
    }

    if (!$this->upload->do_upload('img3')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['img3'] = $fileData['file_name'];
    }

    $data['nombre'] = $this->input->post('nombre');
    $data['precio'] = $this->input->post('precio');
    $data['descripcion'] = $this->input->post('descripcion');
    $data['stock'] = $this->input->post('stock');


    if ( $this->Productos_model->update($id_producto, $data) ) {
        echo '<script type="text/javascript">
                alert("Producto agregado correctamente");
              </script>';
        redirect(base_url().'back/Productos/listado', 'refresh');
    } else {
        $this->session->set_flashdata('error', 'Datos invalidos o incorrectos');
        redirect(base_url().'back/Productos/form');
    }
  }

  function eliminar($id){
    echo '<script type="text/javascript">
            alert("Producto eliminado");
          </script>';
    $this->Productos_model->delete($id);
    redirect(base_url().'back/productos/listado', 'refresh');
  }

}
