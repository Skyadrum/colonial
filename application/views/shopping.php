			<!-- Main -->
			<div id="main">
				<!-- Post -->
				<div class="table-wrapper ocultar">
					<?php if (!$this->cart->contents()): ?>
						<div style="margin:auto; margin-top:30px; margin-bottom:10%;" align="center">
							<h2>El carrito esta vacio!</h2>
						</div>
					<?php else: ?>
						<form action="<?php echo base_url() ?>Shopping/actualizarCarrito" method="post">
							<h3>MI CARRITO</h3>
							<table class="alt">
								<thead>
									<tr>
										<th> </th>
	                	<th>Producto</th>
	                	<th>Precio</th>
	                	<th>Cantidad</th>
	                	<th>Total</th>
	            		</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach ($this->cart->contents() as $items): ?>
										<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

										<tr>
											<td>
												<a class="icon fa-trash-o label" name="<?php echo $i.'[rowid]' ?>" href="<?php echo base_url() ?>Shopping/removeItem/<?php echo $items['rowid'] ?>" ></a>
											</td>

											<td>
												 <?php echo $items['name'] ?>
											</td>

											<td>
												$<?php echo $this->cart->format_number($items['price'],2,',','.') ?>
											</td>

			                <td class="canti">
	                			<ul class="icons alt mas">
	                    		<li>
														<!-- <a class="icon solo fa-minus-circle label" onclick="decrementar();"></a> -->

														<input type="number" min="0" size="1" max="10" class="button cantidad" value="<?php echo $items['qty'] ?>" name="<?php echo $i.'[qty]' ?>" id="cantidad">

														<!-- <a class="icon fa-plus-circle label" onclick="incrementar();"></a> -->
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
								</tbody>
								<tfoot>
									<tr>
										<td colspan="4"></td>
										<td><button type="submit" class="button small" >Actualizar Carrito</button></td>
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
											<input type="text" id="precio" value="<?php echo $this->cart->total() ?>" style="border: 0;" readonly>
											<input type="hidden" id="sub" value="<?php echo $this->cart->total() ?>">
											<p>(impuesto incluido)</p>
										</td>
									</tr>

									<tr>
										<td><h3>Envio</h3></td>
										<td>
											<input type="text" id="envio" value="" readonly style="border: 0;">
											<p id="mensaje">Envio Gratis <small>(para pedidos mayores de $1,000)</small></p>
										</td>

									</tr>
									<tr>
										<td><h3>Total</h3></td>
										<td>
											<input type="text" id="total" value="" readonly style="border: 0;">
											<p>(incluye el .16% IVA)</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<!--TOTAL -->
						<ul class="actions">
							<li><a class="button special">Realizar Pedido</a></li>
						</ul>
					<?php endif; ?>


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
								<?php $i = 1; ?>
								<?php foreach ($this->cart->contents() as $items): ?>
									<tr>
										<td><?php echo $items['name'] ?></td>
										<td>$<?php echo $this->cart->format_number($items['subtotal'],2,',','.') ?></td>
									</tr>
								<?php $i++; ?>
								<?php endforeach; ?>
								<tr>
									<td>Sub-Total</td> <!-- Aqui es el total -->
									<td>$<?php echo $this->cart->format_number($this->cart->total(),2,',','.'); ?></td>
								</tr>
								<tr>
									<td>Envio</td>
									<?php if ($this->cart->total() >= 1000): ?>
										<td>Gratis!!</td>
										<?php else: ?>
											<td>$250.00</td>
									<?php endif; ?>
								</tr>
								<tr>
									<td>Total</td> <!-- Aqui es el total más envio -->
									<?php if ($this->cart->total() >= 1000): ?>
										<td>$<?php echo $this->cart->format_number($this->cart->total(),2,',','.'); ?></td>
										<?php else: ?>
											<td>$<?php
													$subtotal = $this->cart->total();
													$envio = 250;
													$total = $subtotal + $envio;
													echo number_format($total,2,',','.');
												?>
											</td>
									<?php endif; ?>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="pago">
						<div class="row uniform">
							<div class="12u$" style="margin-top:25px;">
								<ul class="actions">
									<li><button type="submit" id="pedido" class="special">Realizar Pedido</button></li>
									<li><input class="cancelar" type="reset" value="Cancelar" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
				<!--pago-->
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
		<script src="<?php echo base_url() ?>static/js/piezas.js"></script>

	</body>
</html>
