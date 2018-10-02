const stock = document.getElementById('stock');
const cant = document.getElementById('qty');

// Funciones
function piezas(e){

  if (cantidad.value < 1) {
      alert('No puedes comprar menos de una pieza');
      cantidad.value = 1;
  }

  if (cantidad.value > parseInt(stock.value)) {
      alert(`La cantidad máxima es de ${ parseInt(stock.value) } piezas`);
      cantidad.value = parseInt(stock.value);
  } else {
      cant.value = cantidad.value;
    }
}
