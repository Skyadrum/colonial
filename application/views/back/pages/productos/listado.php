<title>Panel de Control | Listado de productos</title>

<div class="content-wrapper">
	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb" style="margin-top:25px;">
			<li class="breadcrumb-item">
				<a href="index.html">Productos</a>
			</li>
			<li class="breadcrumb-item active">Listado de Productos</li>
		</ol>

		<div class="card mb-3">
      <div class="card-header">
          <i class="fa fa-product-hunt"></i> Productos Existentes
					<a href="<?php echo base_url() ?>productos/agregar" class="btn btn-primary btn-small float-right">Agregar Nuevo Producto</a>
			</div>

        <div class="card-body">
          <div class="table-responsive">
						<?php if (!$productos): ?>
							<h4>No hay información para mostrar</h4>
						<?php else: ?>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
									<tr class="text-center">
										<th>Id</th>
										<th>Imagen</th>
										<th>Nombre</th>
										<th>Precio</th>
										<th>Stock</th>
										<th>Acciones</th>
									</tr>
                </thead>
                <tbody>
										<?php foreach ($productos as $producto): ?>
											<tr class="text-center">
												<td style="vertical-align:middle;"><?= $producto->id_producto ?></td>
												<td style="vertical-align:middle;">
													<img src="<?= base_url() ?>media/productos/<?= $producto->imagen ?>" class="img-fluid img-thumbnail" height="100px" width="100px">
												</td>
												<td style="vertical-align:middle;"><?= $producto->nombre ?></td>
												<td style="vertical-align:middle;"><?= $producto->precio ?></td>
												<td style="vertical-align:middle;"><?= $producto->stock ?></td>

												<td style="vertical-align:middle;">
													<div class="btn-group-sm text-center" role="group" aria-label="Basic example">

														<a class="btn btn-success" href="<?= base_url() ?>productos/editar/<?= $producto->id_producto ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>

														<a class="btn btn-danger" href="<?= base_url() ?>productos/eliminar/<?= $producto->id_producto ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
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
