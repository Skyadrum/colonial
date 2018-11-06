const disp = document.getElementById('disp'); //Numero de piezas en la DB
const cantidad = document.getElementById('cantidad'); //Cantidad que se muestra,
const qty = document.getElementById('qty'); //Cantidad que se guarda,


function incrementar(){
  if (cantidad.value < parseInt(disp.value)) {
      cantidad.value ++;
      qty.value ++;
  } else {
      alert(`No puedes comprar más de ${ disp.value } piezas`);
      cantidad.value = parseInt(disp.value);
    }
}


function decrementar(){
  if (cantidad.value > 01) {
    cantidad.value --;
    qty.value --;
  } else {
      alert('No puedes comprar menos de una peiza');
      cantidad.value = 1;
    }
}
