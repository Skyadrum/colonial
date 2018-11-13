<title>Panel de Control | Editar usuario</title>
<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
      <ol class="breadcrumb" style="margin-top: 25px;">
        <li class="breadcrumb-item">
          <a href="index.html">Usuarios</a>
        </li>
        <li class="breadcrumb-item active">Editar Usuarios</li>
      </ol>

			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-users"></i> Actualizar datos de: <?php echo $usuario->usr_name ?>
					<a href="<?php echo base_url() ?>usuarios" class="btn btn-primary btn-small float-right">Regresar</a>
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

					<form method="post" action="<?php echo base_url() ?>back/Users/upUser" enctype="multipart/form-data">

						<input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario; ?>">

				    <div class="form-row">
				      <div class="form-group col-md-12">
				        <label for="usr_img">Imagen:</label>
				        <input type="file" class="form-control-file" id="usr_img" name="usr_img" />
								<span>Imagen actual: <?php echo $usuario->usr_img ?></span>
				      </div>
				    </div>

						<div class="form-row">
							<div class="form-group col-md-4">
				        <label for="usr_name">Nombre:</label>
				        <input type="text" class="form-control" id="usr_name" name="usr_name" value="<?php echo $usuario->usr_name ?>">
				      </div>

							<div class="form-group col-md-4">
				        <label for="correo">Correo:</label>
				        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $usuario->correo ?>">
				      </div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
							 <label for="usuario">Nombre de Usuario</label>
							 <input type="text" class="form-control" id="usuario" value="<?php echo $usuario->usuario ?>" name="usuario">
						 </div>

						 <div class="form-group col-md-4">
							 <label for="password">Contraseña</label>
							 <input type="text" class="form-control" id="password" value="<?php echo $usuario->password ?>" name="password">
						 </div>

						 <div class="form-group col-md-4">
							 <label for="fk_roles">Rol</label>
								 <select class="form-control" name="fk_roles">
									 <option value="<?php echo $usuario->fk_roles ?>"><?php echo $rol->nombre ?></option>
									 <?php if ( !empty( $roles ) ): ?>
										 <?php foreach ($roles as $rol): ?>
											 <option value="<?= $rol->id_rol; ?>"><?= $rol->nombre; ?></option>
										 <?php endforeach; ?>
									 <?php endif; ?>
								 </select>
						 </div>
						</div>

				    <button type="submit" class="btn btn-primary btn-outline-success float-right">Actualizar Datos</button>
				  </form>
				</div>
			</div>
	</div>
</div>
