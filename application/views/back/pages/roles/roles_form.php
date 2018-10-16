<title>Panel de Control | Agregar rol</title>

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb" style="margin-top:25px;">
			<li class="breadcrumb-item">
				<a href="index.html">Roles</a>
			</li>
			<li class="breadcrumb-item active">Nuevo Rol</li>
		</ol>

		<div class="card mb-3">
			<div class="card-header">
				<i class="fa fa-table"></i> Roles Existentes
				<a href="<?= base_url(); ?>roles" class="btn btn-primary btn-small float-right">Regresar</a>
			</div>

			<div class="card-body">
				<!-- Contenido -->
				<!-- Mensaje en caso de error -->
				<?php if ($this->session->flashdata('error')): ?>
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close btn btn-danger" data-dismiss="alert" aria-hidden="true">&time;</button>
						<p><i class="icon fa fa-ban"></i><?= $this->session->flashdata('error'); ?></p>
					</div>
				<?php endif; ?>


				<form action="<?php echo base_url(); ?>back/roles/new_rol" method="post">
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="nombre">Rol</label>
							<input type="text" name="nombre" class="form-control" placeholder="Nombre del nuevo rol">
						</div>

						<div class="col-md-4 form-group" >
							<label for="">Accion</label><br>
							<button type="submit" class="btn btn-success btn-outline-success">Crear nuevo rol</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
