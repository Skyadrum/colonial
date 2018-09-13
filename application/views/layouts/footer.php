
		<!-- Footer -->
		<footer id="footer">
			<section>
				<form method="post" action="<?php echo base_url() ?>Home/sendmail">
					<div class="field">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" />
					</div>
					<div class="field">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" />
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="3"></textarea>
					</div>
					<ul class="actions">
						<li><input type="submit" value="Send Message" /></li>
					</ul>
				</form>
			</section>

			<section class="split contact">
				<section class="alt">
					<h3>Dirección</h3>
					<p>C 3 Sur #504 Barr La Virgen<br/>
					Acajete, Puebla C.p 75110</p>
				</section>
				<section>
					<h3>Phone</h3>
					<p><a href="#">(222) 954-5776</a></p>
				</section>
				<section>
					<h3>Email</h3>
					<p><a href="#">contacto@colonialsantiago.com</a></p>
				</section>
				<section>
					<h3>Social</h3>
					<ul class="icons alt">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
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

	</body>
</html>
