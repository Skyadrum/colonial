
const envio       = document.getElementById('envio');
const subtotal    = document.getElementById('subtotal');
const sub         = document.getElementById('sub');
const total       = document.getElementById('total');
const costo       = 250;

// console.log(subtotal);

if (subtotal.value > 1000) {
  envio.value = '0';
  sub.value = subtotal.value;

} else {
  envio.value = parseInt(costo);
  sub.value = subtotal.value;
  var final = parseInt(subtotal.value) + parseInt(costo);
  total.value = parseInt(final);

}
