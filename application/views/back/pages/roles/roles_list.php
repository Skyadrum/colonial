<title>Panel de Control | Listado de roles</title>

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb" style="margin-top: 25px;">
			<li class="breadcrumb-item">
				<a href="index.html">Roles</a>
			</li>
			<li class="breadcrumb-item active">Listado de Roles</li>
		</ol>

		<div class="card mb-3">
      <div class="card-header">
          <i class="fa fa-sitemap"></i> Roles Existentes
					<a href="<?php echo base_url() ?>roles/agregar" class="btn btn-primary btn-small float-right">Agregar Nuevo Rol</a>
			</div>

        <div class="card-body">
					<?php if (!$roles): ?>
						<h5>Aun no se generan los roles</h5>
					<?php else: ?>
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
										<tr>
											<th>Id</th>
											<th>Nombre del Rol</th>
										</tr>
                  </thead>
                  <tbody>
										<?php foreach ($roles as $rol): ?>
											<tr>
												<td><?= $rol->id_rol; ?></td>
												<td><?= $rol->nombre; ?></td>
											</tr>
										<?php endforeach; ?>
                  </tbody>
              </table>
          </div>
					<?php endif; ?>
      </div>
    </div>
	</div>
</div>
