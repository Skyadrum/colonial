<!-- Main -->
	<div id="main">

	</div>

  <!-- Footer -->
  <footer id="footer">

		<section>
      <article>
				<a href="#" class="image fit">
					<img src="<?php echo base_url() ?>media/productos/<?php echo $producto->imagen ?>" alt="" />
				</a>
				<div class="box alt">
					<div class="row 50% uniform">
						<div class="4u">
							<span class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->img1 ?>" /></span>
						</div>
						<div class="4u">
							<span class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->img2 ?>" /></span>
						</div>
						<div class="4u">
							<span class="image fit"><img src="<?php echo base_url() ?>media/productos/<?php echo $producto->img3 ?>" /></span>
						</div>
					</div>
				</div>
    	</article>
	  </section>


		<section class="split">

			<section>
				<form class="alt" action="<?php echo base_url(); ?>Shopping/addItem" method="post">
					<input type="hidden" name="id" value="<?php echo $producto->id_producto ?>">

					<h2><?php echo $producto->nombre ?></h2>

					<input type="hidden" name="name" value="<?php echo $producto->nombre ?>">

					<ul class="icons alt">
						<li class="red"><del>$75.00 MNX</del></li> <!-- Precio original -->
						<li><span><strong>$ <?php echo $producto->precio ?> MNX</strong></span></li>
						<input type="hidden" name="price" value="<?php echo $producto->precio ?>">
					</ul>
	        <p class="red"><?php echo $producto->descripcion ?> <br>
						<span><?php echo $producto->stock ?> en existencia</span>
						<input type="hidden" value="<?php echo $producto->stock ?>" name="stock" id="stock">
					</p>


      </section>

      <section>
        <ul class="icons alt" id="items">
					<li>
						<a class="icon solo fa-minus-circle label" onclick="cantidad.value--; piezas();"></a>

						<input class="button small" value="1" name="cantidad" id="cantidad">
						<input type="hidden" name="qty" id="qty" value="1">

						<a class="icon fa-plus-circle label" onclick="cantidad.value++; piezas();"></a>
					</li>
				</ul>
				<button type="submit" class="button special" style="margin-left: 30px;">Añadir al Carrito</button>
				<p style="margin-left: 30px;"><span>Categoria: </span> Pulcera, Tejido, talavera.</p>
			</form>
    </section>


	    <section>
				<h3>Descripción del Producto</h3>
				<p>Pulsera tejida artesanalmente, con una pieza de talavera en diferentes Modelos <i> usted se estaría llevando una pieza única e irrepetible.</i>
        <br><strong>* Nota: </strong> Nuestros modelos de Talavera no son siempre los mismos mostrados en las fotos ya que están fabricados a mano y varían.</p>
			</section>
		</section>
  </footer>

	<!-- Copyright -->
	<footer id="copy">
		<div id="copyright">
			<ul><li>&copy; Todos los Derechos Reservados 2018</li><li>Design: <a href="https://linecodeid.com" target="_blank">Line Code ID</a></li></ul>
		</div>
	</footer>

</div>

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
