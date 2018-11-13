<title>Panel de Control | Listado de banners</title>

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb" style="margin-top:25px;">
			<li class="breadcrumb-item">
				<a href="index.html">Banners</a>
			</li>
			<li class="breadcrumb-item active">Listado de Banners</li>
		</ol>

		<div class="card mb-3">
      <div class="card-header">
          <i class="fa fa-bookmark"></i> Banners Existentes
					<a href="<?php echo base_url() ?>banners/agregar" class="btn btn-primary btn-small float-right">Agregar Nuevo Banner</a>
			</div>

        <div class="card-body">
          <div class="table-responsive">
						<?php if (!$banners): ?>
							<h4>No hay información para mostrar</h4>
						<?php else: ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
									<tr class="text-center">
										<th>Id</th>
										<th>Imagen</th>
										<th>Acciones</th>
									</tr>
                </thead>
                <tbody>
										<?php foreach ($banners as $banner): ?>
											<tr class="text-center">
												<td style="vertical-align:middle;"><?= $banner->id_banner; ?></td>
												<td style="vertical-align:middle;">
													<img src="<?= base_url() ?>media/banners/<?= $banner->imagen; ?>" class="img-fluid img-thumbnail" height="100px" width="100px">
												</td>
												<!-- <td style="vertical-align:middle;"><?= $banner->nombre; ?></td> -->
												<td style="vertical-align:middle;">
													<div class="btn-group-sm text-center" role="group" aria-label="Basic example">

														<a class="btn btn-success" href="<?php echo base_url() ?>banners/editar/<?= $banner->id_banner; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>

														<a class="btn btn-danger" href="<?php echo base_url() ?>banners/<?= $banner->id_banner ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
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
