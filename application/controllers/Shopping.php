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
    $id = $this->input->post('id');

    $data = array(
      'id'      => $this->input->post('id'),
      'qty'     => $this->input->post('qty'),
      'price'   => $this->input->post('price'),
      'name'    => $this->input->post('name')
    );

    if ($this->cart->insert($data)) {
        echo "<script>alert('Producto Guardado')</script>";
        redirect(base_url().'store/'.$id, 'refresh');
    } else {
        echo "Algo va mal!";
      }
  }

  function stock(){
    $id_item = $this->input->post('id');
    $stock_item = $this->input->post('stock');

    $this->Shopping_model->upStock($id_item, $stock_item);
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

    // echo "<pre>";
    // print_r ($items);
    // echo "</pre>";

    $msg = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loza Colonial Santiago</title>
</head>

<body>
    <div style="display: block; margin: 0 auto; padding: 0; width: 95%; border: 1px solid #d6d2d2; font-size: .8em; background: rgb(222, 226, 230);">

      <header style="display: block; margin: 0 auto; width: 95%;">
          <h3>Estimad@: '.$data['nombre'].' '.$data['apellidos'].'</h3>
          <p style="text-align: justify;">Se registro un Pedido en: <strong>Colonial Santiago</strong>. Una vez que su Pedido esté listo, le enviaremos el número de guía del envió vía correo electrónico.<br>
            Si desea contactar personalmente a alguno de nuestros vendedores envié un correo electrónico a: contacto@colonialsantiago.com Ó por teléfono al: 01 (044) 223 101 2301 , 01 (044) 222 954 5776 <br> Lunes a Viernes, 10am - 7pm.</p>
          <p>Gracias por su Compra.</p>
      </header>
      <section style="display:block; margin: 0 auto; position: relative; width: 95%;">
        <div>
          <header style="background: rgb(201, 200, 200); display: block; margin: 0 auto; padding: 3px 0;">
              <h4 style="text-align: center;">Forma de Pago:</h4>
          </header>
          <p style="text-align: justify;"><strong>Depósito en efectivo en Santander o OXXO.</strong>  <br><br>
              No. tarjeta Santander.
              <strong style="color:red" >5579 0700 5922 3795</strong> <br><br>
              <span style="font-size:.9em; ">* DEPOSITAR LA CANTIDAD EXACTA (PARA EVITAR RETRASOS EN El PEDIDO)
                  Favor de enviar  ficha escaneada o fotografía de la ficha de depósito con su nombre y número de folio para poder liberar el paquete  y sea enviado (POR RAZONES DE MENSAJERÍA  PARA QUE SU PAQUETE  SALGA LE MISMO DÍA QUE USTED HACE FAVOR DE  ENVIARNOS  LA FICHA DE DEPOSITO, ÉSTA DEBERÁ  SER RECIBIDA ANTES DE LAS 11:59AM DE LO CONTRARIO SALDRÁ HASTA EL  DÍA SIGUIENTE)</span>.</p>
        </div>

        <div style="display:block; margin: 0 auto; float: left; width:49%; height: 210px; border: 1px solid #ffffff;">
            <header style="background: rgb(201, 200, 200); display: block; margin: 0 auto; padding: 3px 0;">
                <h4 style="text-align: center;">Información de Envío:</h4>
            </header>
            <ul style="list-style: none; padding: 0; font-size:.9em;" >
              <li><b>Nombre: </b>'.$data['nombre'].' '.$data['apellidos'].'</li>'.
              '<li><b>Dirección: </b>'.$data['direccion'].'</li>'.
              '<li><b>Estado: </b>'.$data['estado'].'</li>'.
              '<li><b>Municipio: </b>'.$data['municipio'].'</li>'.
              '<li><b>Codigo Postal: </b> '.$data['cp'].'</li>'.
              '<li><b>Pais: </b> '.$data['pais'].'</li>'.
              '<li><b>Tel: </b> '.$data['telefono'].'</li>'.
            '</ul>'.
        '</div>'.
        '<div style="display:block; margin: 0 auto; float: left; width:49%; height: 210px; border: 1px solid #ffffff; ">'.
            '<header style="background: rgb(201, 200, 200); display: block; margin: 0 auto; padding: 3px 0;">
                <h4 style="text-align: center;">Método de Envío:</h4>
            </header>
            <p style="text-align: justify; font-size:.9em; padding:  0 3px;">Éste se efectuará de manera general a través de DHL, con un costo entre los $MXN 200.00.<br> El numero de rastreo se le enviara cuando se confirme su pago.<br>
            Nota: el envio sera gratis para pedidos mayores a $MXN 1,000 pesos.</p>
        </div>
      </section>

      <div style="display: block; margin: 0 auto; width: 95%; position: relative;">
        <table style="display: block; margin: 0 auto; ">
          <thead style="background: white;" >
            <tr>
              <th style="border-bottom: 2px solid #d6d2d2; width:250px;">Producto</th>
              <th style="border-bottom: 2px solid #d6d2d2; width:250px;">Precio unitario</th>
              <th style="border-bottom: 2px solid #d6d2d2; width:250px;">Cantidad</th>
              <th style="border-bottom: 2px solid #d6d2d2; width:250px;">Total</th>
            </tr>
          </thead>

          <tbody>';

    if ($this->cart->total() >= 1000) {
      foreach ($items as $item) {
        $msg .= '<tr>';
        $msg .= '<td valign="middle">'.$item['name'].'</td>';
        $msg .= '<td valign="middle">'.$item['price'].'</td>';
        $msg .= '<td valign="middle">'.$item['qty'].'</td>';
        $msg .= '<td valign="middle">'.$item['subtotal'].'</td>';
        $msg .= '</tr>';
      }

      $msg .= '</tbody>';

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
      $msg .= '</table>';
      $msg .= '<p style="text-align: justify; width: 95%;" >Solicitamos de la manera más atenta que  revise su  correo electrónico en estos días esperando la información correspondiente.  En caso de no recibir  ninguna notificación  vía electrónica en un plazo máximo a 36hrs. (excepto fines de  semana).  Favor de comunicarse con nosotros  a contacto@colonialsantiago.com   para resolver  la situación de su pedido.</p>
      </div>

        <footer style="background: rgb(201, 200, 200); display: block; margin: 0 auto; margin-top: 15px;padding: 10px 0;" >
          <p style="text-align: center;"> Muchas Gracias por su Confianza <strong>Colonial Santiago</strong></p>
        </footer>
      </div>
</body>
</html>';


    } else {
        foreach ($items as $item) {
          $msg .= '<tr>';
          $msg .= '<td>'.$item['name'].'</td>';
          $msg .= '<td>'.$item['price'].'</td>';
          $msg .= '<td>'.$item['qty'].'</td>';
          $msg .= '<td>'.$item['subtotal'].'</td>';
          $msg .= '</tr>';
        }

        $msg .= '</tbody>';

        $envio = 250;
        $sub = $this->cart->total();
        $total = $sub + $envio;

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
        $msg .= '</table>';
        $msg .= '<p style="text-align: justify; width: 95%;" >Solicitamos de la manera más atenta que  revise su  correo electrónico en estos días esperando la información correspondiente.  En caso de no recibir  ninguna notificación  vía electrónica en un plazo máximo a 36hrs. (excepto fines de  semana).  Favor de comunicarse con nosotros  a contacto@colonialsantiago.com   para resolver  la situación de su pedido.</p>
        </div>

        <footer style="background: rgb(201, 200, 200); display: block; margin: 0 auto; margin-top: 15px;padding: 10px 0;" >
          <p style="text-align: center;"> Muchas Gracias por su Confianza <strong>Colonial Santiago</strong></p>
        </footer>
        </div>
        </body>
        </html>';
      }

    $this->email->initialize($config);

    $this->email->from('linecodeid@gmail.com', 'Luis Morles Santiago');
    $this->email->to($data['correo']);
    $this->email->subject('Orden del compra');
    $this->email->message($msg);

    // $data['item_name']

    // $this->email->send();

    if ($this->Shopping_model->addVenta($data)) {
      echo '<script type="text/javascript">
              alert("Su petición ha sido recibida, por favor revise su correo en unos minutos");
            </script>';
      $this->email->send();
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
