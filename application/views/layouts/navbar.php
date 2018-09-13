<!-- Nav -->
<nav id="nav">
	<ul class="links">
		<li class="<?php if($this->uri->segment(1)=="home" || $this->uri->segment(1)==""){echo "active";}?>">
			<a href="<?php echo base_url() ?>home">Inicio</a>
		</li>

		<li class="<?php if($this->uri->segment(1)=="about"){echo "active";}?>">
			<a href="<?php echo base_url() ?>about"> Nosotros</a>
		</li>

		<li class="<?php if($this->uri->segment(1)=="contact"){echo "active";}?>">
			<a href="<?php echo base_url() ?>contact">Contacto</a>
		</li>
	</ul>
	<ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="<?php echo base_url() ?>shopping" class="icon fa-shopping-cart"><span class="label">Carrito</span> 1 </a></li>
	</ul>
</nav>
