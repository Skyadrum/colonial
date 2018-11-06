<title>Panel de Control | Listado de clientes</title>

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb" style="margin-top: 25px;">
			<li class="breadcrumb-item">
				<a href="index.html">Clientes</a>
			</li>
			<li class="breadcrumb-item active">Listado de Clientes</li>
		</ol>

		<div class="card mb-3">
      <div class="card-header">
          <i class="fa fa-table"></i> Clientes Existentes
			</div>

        <div class="card-body">
          <div class="table-responsive">
						<?php if (!$clientes): ?>
							<h4>No hay clientes activos por el momento</h4>
						<?php else: ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
									<tr class="text-center">
										<th>Id</th>
										<th>Nombre</th>
										<th>Correo</th>
										<th>Teléfono</th>
										<th>Pais</th>
										<th>Acciones</th>
									</tr>
                </thead>
                <tbody>
										<?php foreach ($clientes as $cliente): ?>
											<tr class="text-center">
												<td><?= $cliente->id_cliente; ?></td>
												<td><?= $cliente->nombre.' '.$cliente->apellidos ?></td>
												<td><?= $cliente->correo; ?></td>
												<td><?= $cliente->telefono; ?></td>
												<td><?= $cliente->pais; ?></td>
												<td>
													<div class="btn-group-sm text-center" role="group" aria-label="Basic example">
													  <a class="btn btn-success" href="<?php echo base_url() ?>clientes/info/<?php echo $cliente->id_cliente ?>"><i class="fa fa-search" aria-hidden="true"></i></a>

														<a class="btn btn-danger" href="<?php echo base_url() ?>back/clientes/rmCli/<?php echo $cliente->id_cliente ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
													</div>
												</td>
											</tr>
									<?php endforeach; ?>
								<?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
	</div>
</div>
