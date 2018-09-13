<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('back/Banner_model'));

  }

  //Vistas
  function listado(){
    $banners = array(
      'banners' => $this->Banner_model->getBanners()
    );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/banners/listado', $banners);
    $this->load->view('back/layouts/footer');
  }

  function form(){
    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/banners/form');
    $this->load->view('back/layouts/footer');
  }

  function editar($id){
    $data = array( 'banner' => $this->Banner_model->getBanner($id) );

    $this->load->view('back/layouts/header');
    $this->load->view('back/layouts/navbar');
    $this->load->view('back/pages/banners/edit', $data);
    $this->load->view('back/layouts/footer');
  }



  //CRUD
  function agregar(){
    $data = array();

    $config = array(
      'upload_path'   => './media/banners',
      'allowed_types' => 'png|jpg|jpeg'
    );

    $this->load->library('upload' , $config);

    if (!$this->upload->do_upload('imagen')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['imagen'] = $fileData['file_name'];
    }

    $data['nombre'] = $this->input->post('nombre');

    //Validamos y redireccionamos
    if ($this->Banner_model->newBanner($data)) {
        $this->session->set_flashdata('error', 'Datos invalidos o incorrectos');
        redirect(base_url().'back/Banners/form');
    } else {
        echo '<script type="text/javascript">
                alert("Nuevo banner agregado");
              </script>';
        redirect(base_url().'back/Banners/listado');
      }
  }

  function actualizar(){
    $idBanner = $this->input->post('id_banner');

    $data = array();

    $config = array(
      'upload_path'   => './media/banners',
      'allowed_types' => 'png|jpg|jpeg'
    );

    $this->load->library('upload' , $config);

    if (!$this->upload->do_upload('imagen')) {
        $error = array('error' => $this->upload->display_errors());
    } else {
        $fileData = $this->upload->data(); //Se toma el nombre
        $data['imagen'] = $fileData['file_name'];
    }

    $data['nombre'] = $this->input->post('nombre');

    //Validamos y redireccionamos
    if ($this->Banner_model->update($idBanner, $data)) {
        echo '<script type="text/javascript">
                alert("Datos actualizados correctamente");
              </script>';
        redirect(base_url().'back/Banners/listado', 'refresh');
    } else {
        $this->session->set_flashdata('error', 'Datos invalidos o incorrectos');
        redirect(base_url().'back/Banners/form');
      }
  }

  function eliminar($id){
    echo '<script type="text/javascript">
            alert("Banner eliminado");
          </script>';
    $this->Banner_model->delete($id);
    redirect(base_url().'back/banners/listado', 'refresh');
  }

}
