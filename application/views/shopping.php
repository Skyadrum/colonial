		<!-- Main -->
		<div id="main">
			<!-- Post -->
			<div class="table-wrapper ocultar">
				<?php if (!$this->cart->contents()): ?>
					<div style="margin-top:30px;" align="center">
						<h2>Tu carrito esta vacio!</h2>
					</div>
				<?php else: ?>

				<form action="<?php echo base_url() ?>Shopping/actualizarCarrito" method="post"> <!-- Inicio del Form -->
					<table class="alt">
						<h3>MI CARRITO</h3>
						<thead>
							<tr>
								<th> </th>
	              	<th>Producto</th>
	              	<th>Precio</th>
	              	<th>Cantidad</th>
	              	<th>Subtotal</th>
	            	</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
								<?php foreach ($this->cart->contents() as $items): ?>
									<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
									<tr>
										<td><a name="<?php echo $i.'[rowid]' ?>" class="icon fa-trash-o label" href="<?php echo base_url() ?>Shopping/removeItem/<?php echo $items['rowid'] ?>"></a></td>

										<td><?php echo $items['name'] ?></td>
										<td>$<?php echo $this->cart->format_number($items['price'],2,',','.') ?></td>
			            	<td>
			              	<ul class="icons alt">
			              		<li>
													<a class="icon solo fa-minus-circle label" onclick="cantidad.value--;"></a>
													<input type="text" name="<?php echo $i.'[qty]' ?>" value="<?php echo $items['qty'] ?>" id="cantidad" readonly>
													<a class="icon fa-plus-circle label" onclick="cantidad.value++;"></a>
												</li>
			          			</ul>
			            	</td>
			            	<td>
											<input type="hidden" id="subtotal" value="<?php echo $items['subtotal'] ?>">
											$<?php echo $this->cart->format_number($items['subtotal'],2,',','.') ?>
										</td>
									</tr>
								<?php $i++; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>

						<tfoot>
							<tr>
								<td colspan="4"></td>
								<td><button type="submit" class="button small">Actualizar Carrito</button></td>
							</tr>
						</tfoot>
					</table>
				</form>

				<!--TOTAL -->
				<h3>TOTAL</h3>
					<div class="table-wrapper">
						<table class="alt total">
							<tbody>
								<tr>
									<td><h3>SUBTOTAL</h3></td>
									<td>
										<input type="text" id="sub" value="" readonly style="border: 0;">
										<p>(impuesto incluido)</p>
									</td>

								</tr>
								<tr>
									<td><h3>Envio</h3></td>
									<td>
										<input type="text" id="envio" value="" readonly style="border: 0;">
										<p>Envio Gratis <small>(para pedidos mayores de $1,000)</small></p>
									</td>
								</tr>
								<tr>
									<td><h3>Total</h3></td>
									<td>
										<input type="text" id="total" value="" readonly style="border: 0;">
										<p>(incluye el .16% IVA)</p>
									</td>
									<!-- <td><p>$<?php echo $this->cart->format_number($this->cart->total(),2,',','.'); ?> </p> </td> -->
								</tr>
							</tbody>
						</table>
					</div>
				<!--TOTAL -->

				<ul class="actions">
					<li><a class="button special">Realizar Pedido</a></li>
				</ul>

			</div>	<!--table-wrapper-->

			<section class="inactiva">
				<h3>Direccion Principal</h3>

				<form method="post" action="<?php echo base_url() ?>Shopping/formEnvio" class="alt">
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<input type="text" name="nombre" id="nombre" value="" placeholder="Nombre(s)" />
						</div>
						<div class="6u$ 12u$(xsmall)">
							<input type="text" name="apellidos" id="apellidos" value="" placeholder="Apellido(s)" />
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="email" name="correo" id="correo" value="" placeholder="Correo" />
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="telefono" id="telefono" value="" placeholder="Telefono" />
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="pais" id="pais" value="" placeholder="Pais" />
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="direccion" id="calle" value="" placeholder="Dirección Calle y Numero"/>
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="colonia" id="colonia" value="" placeholder="Colonia"/>
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="municipio" id="demo-name" value="" placeholder="Ciudad/Municipio"/>
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="estado" id="estado" value="" placeholder="Estado/Provincia"/>
						</div>
						<div class="6u 12u$(xsmall)">
							<input type="text" name="cp" id="cp" value="" placeholder="Codigo Postal"/>
						</div>
					</div>


					<!--TOTAL -->
					<h3>Tu Pedido</h3>
					<div class="table-wrapper">
						<table class="alt left">
							<thead>
								<tr>
									<th>Producto</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Pulcera Tejida</td>
									<td>$50.00</td>
								</tr>
								<tr>
									<td>Pulcera Tejida</td>
									<td>$50.00</td>
								</tr>
								<tr>
									<td>Pulcera Tejida</td>
									<td>$50.00</td>
								</tr>
								<tr>
									<td>Sub-Total</td>
									<td>$150.00</td>
								</tr>
								<tr>
									<td>Envio</td>
									<td>Envio Gratis</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>$150.00</td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="pago">
						<h3>Metodo de Pago</h3>
						<div class="row uniform">
							<div class="4u 12u$(small)">
								<input type="radio" id="demo-priority-low" name="demo-priority" checked>
								<label for="demo-priority-low">PayPal</label>
							</div>
							<div class="4u$ 12u$(small)">
								<input type="radio" id="demo-priority-high" name="demo-priority">
								<label for="demo-priority-high">Oxxo Pay Payment</label>
							</div>
							<div class="12u$">
								<ul class="actions">
									<!-- <li><input type="button" value="Realizar Pedido" class="special" /></li> -->
									<li><button type="submit" class="special">Realizar Pedido</button></li>
									<li><input class="cancelar" type="reset" value="Cancelar" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--pago-->
			</section><!--activa-->

		</div><!--main-->

			<!-- Footer -->
			<footer id="copy">
			<!-- Copyright -->
				<div id="copyright">
					<ul><li>&copy; Todos los Derechos Reservados 2018</li><li>Design: <a href="https://linecodeid.com" target="_blank">Line Code ID</a></li></ul>
				</div>
			</footer>

		</div><!--Wrapper-->


		<!-- Scripts -->
		<script src="<?php echo base_url() ?>static/js/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>static/js/jquery.scrollex.min.js"></script>
		<script src="<?php echo base_url() ?>static/js/jquery.scrolly.min.js"></script>
		<script src="<?php echo base_url() ?>static/js/skel.min.js"></script>
		<script src="<?php echo base_url() ?>static/js/util.js"></script>
		<script src="<?php echo base_url() ?>static/js/main.js"></script>
		<script src="<?php echo base_url() ?>static/js/ventas.js"></script>
		<script src="<?php echo base_url() ?>static/js/carrito.js"></script>

	</body>
</html>
