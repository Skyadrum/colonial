<!-- Main -->
<div id="main">

</div>

			<!-- Footer -->
			<footer id="footer">
				<section>
			    <article>
						<a href="#" class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->imagen ?>" alt="" /></a>
						<div class="box alt">
							<div class="row 50% uniform">
								<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->img1 ?>" alt="" /></span></div>
								<div class="4u"><span class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->img2 ?>" alt="" /></span></div>
								<div class="4u$"><span class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->img3 ?>" alt="" /></span></div>
							</div>
						</div>
			  	</article>
			  </section>

				<section class="split">

					<section>
						<form class="alt" action="<?php echo base_url(); ?>Shopping/addItem" method="post">

							<input type="hidden" name="id" value="<?php echo $producto->id_producto ?>">

							<h2 class="black"><?php echo $producto->nombre ?></h2>

							<input type="hidden" name="name" value="<?php echo $producto->nombre ?>">

							<ul class="icons alt">
								<li class="red"> <del> $75.00 MXN </del></li>

								<li> <span><strong> $<?php echo number_format($producto->precio,2,',','.') ?> MXN </strong></span></li>
								<input type="hidden" name="price" value="<?php echo $producto->precio ?>">
							</ul>
							<p><?php echo $producto->nombre ?> <br> <span><?php echo $producto->stock ?> en existencia</span></p>
							<input type="hidden" value="<?php echo $producto->stock ?>" name="stock" id="disp">

							<ul class="icons alt">
								<li>
									<a class="icon solo fa-minus-circle label" onclick="decrementar();"></a>

									<input class="button cantidad" value="1" name="cantidad" id="cantidad"> <!-- Es la que se muetsra -->
									<input type="hidden" name="qty" id="qty" value="1"> <!-- Es la que se guarda -->

									<a class="icon fa-plus-circle label" onclick="incrementar();"></a>
								</li>
							</ul>

							<button type="submit" class="button special" >Añadir al Carrito</button>
							<p><span>Categoria: </span> Pulcera, Tejido, talavera.</p>

						</form>
					</section><!--alt-->

			    <section>
						<h3>Descripción del Producto</h3>
						<p><?php echo $producto->descripcion ?>.</i><br><strong>* Nota: </strong> Nuestros modelos de Talavera no son siempre los mismos mostrados en las fotos ya que están fabricados a mano y varían.</p>
				 </section><!--section-->
				</section><!--split-->
			</footer>

			<!-- Copyright -->
			<footer id="copy">
				<!-- Copyright -->
				<div id="copyright">
					<ul><li>&copy; Todos los Derechos Reservados 2018</li><li>Design: <a href="https://linecodeid.com" target="_blank">Line Code ID</a></li></ul>
				</div>
			</footer>



			<!-- Scripts -->
			<script src="<?php echo base_url() ?>static/js/jquery.min.js"></script>
			<script src="<?php echo base_url() ?>static/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url() ?>static/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url() ?>static/js/skel.min.js"></script>
			<script src="<?php echo base_url() ?>static/js/util.js"></script>
			<script src="<?php echo base_url() ?>static/js/main.js"></script>
			<script src="<?php echo base_url() ?>static/js/carrito.js"></script>

	</body>
</html>
