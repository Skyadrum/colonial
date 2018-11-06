<title>Panel de Control | Listado de usuarios</title>

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb" style="margin-top: 25px;">
			<li class="breadcrumb-item">
				<a href="index.html">Usuarios</a>
			</li>
			<li class="breadcrumb-item active">Listado de Usuarios</li>
		</ol>

		<div class="card mb-3">
      <div class="card-header">
          <i class="fa fa-table"></i> Usuarios Existentes
					<a href="<?php echo base_url() ?>usuarios/agregar" class="btn btn-primary btn-small float-right">Agregar Nuevo Usuario</a>
			</div>

        <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
										<tr class="text-center">
											<th>Id</th>
											<th>Imagen</th>
											<th>Nombre</th>
											<th>Usuario</th>
											<th>Correo</th>
											<th>Rol</th>
											<th>Acciones</th>
										</tr>
                  </thead>
                  <tbody>
										<?php foreach ($users as $usr): ?>
											<tr class="text-center" >
												<td style="vertical-align:middle;"><?= $usr->id_usuario; ?></td>
												<td style="vertical-align:middle;">
													<img src="<?php echo base_url() ?>media/users/<?php echo $usr->usr_img ?>" alt="" height="100 px;" width="100 px;" class="img img-thumbnail">
												</td>
												<td style="vertical-align:middle;"><?= $usr->usr_name; ?></td>
												<td style="vertical-align:middle;"><?= $usr->usuario; ?></td>
												<td style="vertical-align:middle;"><?= $usr->correo; ?></td>
												<td style="vertical-align:middle;"><?= $usr->nombre; ?></td>

                        <td style="vertical-align:middle;">
													<div class="btn-group-sm text-center" role="group" aria-label="Basic example">
													  <a class="btn btn-success" href="<?php echo base_url() ?>usuarios/editar/<?php echo $usr->id_usuario ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>

														<a class="btn btn-danger" href="<?php echo base_url() ?>back/users/eliminar/<?php echo $usr->id_usuario ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
													</div>
												</td>
											</tr>
										<?php endforeach; ?>
                  </tbody>
              </table>
          </div>
        </div>
    </div>
	</div>
</div>
