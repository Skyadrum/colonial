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

					<form method="post" action="<?= base_url(); ?>back/users/newUser" enctype="multipart/form-data">
				    <div class="form-row">
				      <div class="form-group col-md-12">
				        <label for="usr_img">Imagen:</label>
				        <input type="file" class="form-control-file" id="usr_img" name="usr_img">
				      </div>
				    </div>

				    <div class="form-row">
				      <div class="form-group col-md-4">
				        <label for="usr_name">Nombre:</label>
				        <input type="text" class="form-control" id="usr_name" placeholder="Escriba su nombre completo" name="usr_name">
				      </div>

				      <div class="form-group col-md-4">
				        <label for="correo">Correo:</label>
				        <input type="email" class="form-control" id="correo" placeholder="Ejemplo: correo@correo.com" name="correo">
				      </div>
				    </div>

						<div class="form-row">
					    <div class="form-group col-md-4">
					      <label for="usuario">Nombre de Usuario</label>
					      <input type="text" class="form-control" id="usuario" placeholder="Ingresa un nombre de usuario" name="usuario">
					    </div>

							<div class="form-group col-md-4">
					      <label for="password">Contraseña</label>
					      <input type="password" class="form-control" id="password" placeholder="" name="password">
					    </div>

				      <div class="form-group col-md-4">
				        <label for="fk_roles">Rol</label>
									<select class="form-control" name="fk_roles">
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
