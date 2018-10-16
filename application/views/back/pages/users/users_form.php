<title>Panel de Control | Agregar usuario</title>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
      <ol class="breadcrumb" style="margin-top: 25px;">
        <li class="breadcrumb-item">
          <a href="index.html">Usuarios</a>
        </li>
        <li class="breadcrumb-item active">Nuevo Usuario</li>
      </ol>

			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-users"></i> Usuarios Existentes
					<a href="<?= base_url(); ?>usuarios" class="btn btn-primary btn-small float-right">Regresar</a>
				</div>

				<!-- Contenido -->
				<div class="card-body">

					<!-- Mensaje en caso de error -->
					<?php if ($this->session->flashdata('error')): ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close btn btn-danger" data-dismiss="alert" aria-hidden="true">&time;</button>
							<p><i class="icon fa fa-ban"></i><?= $this->session->flashdata('error'); ?></p>
						</div>
					<?php endif; ?>

					<form method="post" action="<?= base_url(); ?>back/usuarios/new_usuarios" enctype="multipart/form-data">
				    <div class="form-row">
				      <div class="form-group col-md-12">
				        <label for="uimg">Imagen:</label>
				        <input type="file" class="form-control-file" id="uimg" name="uimg">
				      </div>
				    </div>

				    <div class="form-row">
				      <div class="form-group col-md-4">
				        <label for="uuser">Usuario:</label>
				        <input type="text" class="form-control" id="uuser" placeholder="Escriba su nombre de usuario" name="uuser">
				      </div>

				      <div class="form-group col-md-4">
				        <label for="upassword">Password:</label>
				        <input type="password" class="form-control" id="upassword" placeholder="Password" name="upassword">
				      </div>
				    </div>

						<div class="row">
					    <div class="form-group col-md-4">
					      <label for="ucorreo">Correo</label>
					      <input type="email" class="form-control" id="ucorreo" placeholder="Correo@correo.com" name="ucorreo">
					    </div>

				      <div class="form-group col-md-4">
				        <label for="idRolesu">Rol</label>
									<select class="form-control" name="idRolesu">
										<option value="#">Tipo de Usuario</option>
						        <?php if ( !empty( $roles ) ): ?>
						          <?php foreach ($roles as $rol): ?>
						            <option value="<?= $rol->id_rol; ?>"><?= $rol->nombre; ?></option>
						          <?php endforeach; ?>
						        <?php endif; ?>
									</select>
				      </div>
				    </div>

				    <button type="submit" class="btn btn-primary btn-outline-success float-right">Dar de Alta</button>
				  </form>
				</div>
			</div>
	</div>
</div>
