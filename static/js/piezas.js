const cantidad = document.getElementById('cantidad');

function incrementar(){
  if (cantidad.value > 0 && cantidad.value < 10) {
    cantidad.value ++;

  } else {
      alert('No puedes comprar mas de 10 piezas')
      cantidad.value = 10;
    }
}


function decrementar(){
  if (cantidad.value > 01 ) {
    cantidad.value --;

  } else {
      alert('No puedes comprar menos de 1 pieza')
      cantidad.value = 1;
    }
}
