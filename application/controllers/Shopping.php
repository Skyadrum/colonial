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

      'item_fac'      => $this->input->post('item_fac'),
    );

    $items = $this->cart->contents();

    //correo
    $config = Array(
      'protocol' => 'smtp',
      'mailtype' => 'html',
      'smtp_host' => 'smtp.mailtrap.io',
      'smtp_port' => 2525,
      'smtp_user' => '6f0cbf43d72d0d',
      'smtp_pass' => '6f2e12522f5a9b',
      'crlf' => "\r\n",
      'newline' => "\r\n"
    );

    $this->email->initialize($config);

    echo "<pre>";
    print_r ($items);
    echo "</pre>";

    $msg = 'Estimado '.$data['nombre'].' '.$data['apellidos'].'<br><br>'.'Hemos recibido su solicitud de compra de los siguientes productos: <br><br>'.
    '<div>'.
      '<table>'.
        '<thead>'.
          '<tr>'.
            '<th>Producto</th>'.
            '<th>Precio unitario</th>'.
            '<th>Cantidad</th>'.
            '<th>Total</th>'.
          '</tr>'.
        '</thead>'.
      '<tbody>';

    if ($this->cart->total() >= 1000) {
      foreach ($items as $item) {
        $msg .= '<tr>';
        $msg .= '<td>'.$item['name'].'</td>';
        $msg .= '<td>'.$item['price'].'</td>';
        $msg .= '<td>'.$item['qty'].'</td>';
        $msg .= '<td>'.$item['subtotal'].'</td>';
        $msg .= '</tr>';
      }

      $total = $this->cart->total();

      $msg .= '<tfoot>';
      $msg .= '<tr>';
      $msg .= '<td>Envio:</td>';
      $msg .= '<td>$0.00</td>';
      $msg .= '</tr>';

      $msg .= '<td>Total:</td>';
      $msg .= '<td>'.'$'.number_format($total,2,".",",").'</td>';
      $msg .= '</tr>';
      $msg .= '</tfoot>';

    } else {
        foreach ($items as $item) {
          $msg .= '<tr>';
          $msg .= '<td>'.$item['name'].'</td>';
          $msg .= '<td>'.$item['price'].'</td>';
          $msg .= '<td>'.$item['qty'].'</td>';
          $msg .= '<td>'.$item['subtotal'].'</td>';
          $msg .= '</tr>';
        }

        $envio = 250;
        $sub = $this->cart->total();
        $total = $sub + $envio;

        $msg .= '<hr>';
        $msg .= '<tfoot>';
        $msg .= '<tr>';
        $msg .= '<td>Envio:</td>';
        $msg .= '<td>$250.00</td>';
        $msg .= '</tr>';

        $msg .= '<tr>';
        $msg .= '<td>Total:</td>';
        $msg .= '<td>'.'$'.number_format($total,2,".",",").'</td>';
        $msg .= '</tr>';
        $msg .= '</tfoot>';
      }

    $msg .= '</tbody>'.'</table>'.'</div>';


    $this->email->from($data['correo'], $data['nombre']);
    $this->email->to('ejemplo@ejemplo.com');
    $this->email->message($msg);

    // $data['item_name']

    $this->email->send();

    if ($this->Shopping_model->addVenta($data)) {
      echo '<script type="text/javascript">
              alert("Su petición ha sido recibida, por favor revise su correo en unos minutos");
            </script>';
      // $this->cart->destroy();
      // redirect(base_url().'', 'refresh');

    } else {
        echo '<script type="text/javascript">
                alert("Algo va mal, por favor verifique sus datos");
              </script>';
        // redirect(base_url().'shopping', 'refresh');
      }
  }

  function empty(){
    $this->cart->destroy();
    redirect(base_url().'', 'refresh');
  }
}
