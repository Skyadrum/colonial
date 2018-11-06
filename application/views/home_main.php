<div id="main">
	<!-- Featured Post -->
	<article class="post featured">
		<header class="major">
			<span class="date">Joyería en Talavera</span>
			<h2><a href="#">And this is a<br />
			massive headline</a></h2>
			<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
			facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
			amet nullam sed etiam veroeros.</p>
		</header>
		<a href="generic.html" class="image main"><img src="images/pic01.jpg" alt="" /></a>
		<ul class="actions">
			<li><a href="generic.html" class="button big">Nosotros</a></li>
		</ul>
	</article>

	<!-- Posts -->
	<section class="posts">
		<?php if (!$productos): ?>
			<h4>Aun no hay productos para mostrar</h4>
		<?php else: ?>
			<?php foreach ($productos as $producto): ?>
				<article>
					<a href="<?php echo base_url() ?>Home/store/<?php echo $producto->id_producto ?>" class="image fit">
						<img src="<?php echo base_url() ?>media/productos/<?php echo $producto->imagen ?>" alt="" />
					</a>
					<h3><?php echo $producto->nombre ?></h3>
					<ul class="icons alt">
						<!-- <li class="red"><del>$75.00 MNX</del></li> Precio con descuento -->
						<li><span><strong>$<?php echo $producto->precio ?>.00 MNX</strong></span></li>
					</ul>
				</article>
			<?php endforeach; ?>
		<?php endif; ?>
	</section>

	<!-- Footer -->
	<footer>
		<div class="pagination">
			<?php echo $paginacion ?>
		</div>
	</footer>

</div>
