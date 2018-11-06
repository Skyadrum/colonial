const costo  = 250; // Costo del envio
const precio = document.getElementById('precio'); // Precio a mostrar
const sub    = document.getElementById('sub'); // subtotal
const envio  = document.getElementById('envio'); // Input donde mostramos el valor del envio
const total  = document.getElementById('total') // costo total del pedido

const pedido = document.getElementById('pedido');


if (sub.value == 0) {
  envio.value = '$0.00';
  console.log(envio.value);

  total.value = '$0.00';
  console.log(total.value);
} else if (sub.value >= 1000) {
    document.getElementById('mensaje').style.display = 'none';

    precio.value = '$' + parseInt(precio.value) + '.00';
    envio.value  = 'Gratis!';
    total.value = '$' + sub.value + '.00';
  } else {
      precio.value = '$' + parseInt(precio.value) + '.00';
      envio.value  = '$' + costo + '.00';
      var final = parseInt(sub.value) + parseInt(costo);
      total.value = '$' + final + '.00' ;
    }
