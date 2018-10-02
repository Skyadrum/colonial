<title>Panel de Control | Editar banner</title>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
      <ol class="breadcrumb" style="margin-top:25px;">
        <li class="breadcrumb-item">
          <a href="#">Banners</a>
        </li>
        <li class="breadcrumb-item active">Editar Banner</li>
      </ol>

			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-bookmark"></i> Actualizar Banner
					<a href="" class="btn btn-primary btn-small float-right">Regresar</a>
				</div>

				<!-- Contenido -->
				<div class="card-body">

					<!-- Mensaje en caso de error -->
					<!-- Fin del Mensaje -->

					<form method="post" action="<?php echo base_url() ?>back/banners/actualizar" enctype="multipart/form-data">

            <input type="text" name="id_banner" value="<?php echo $banner->id_banner ?>">

				    <div class="form-row">
              <div class="form-group col-md-4">
				        <label for="nombre">Nombre:</label>
				        <input type="text" class="form-control" id="nombre" name="nombre"
                       value="<?= $banner->nombre ?>">
				      </div>

							<div class="form-group col-md-4">
				        <label for="imagen">Imagen:</label>
				        <input type="file" class="form-control-file" id="imagen" name="imagen">
                <span>Imagen actual: <?php echo $banner->imagen ?></span>
				      </div>

				      <div class="form-group col-md-2" style="margin-top: 32px">
								<button type="submit" class="btn btn-primary btn-outline-success btn-small float-right">Nuevo Banner</button>
				      </div>
				    </div>
				  </form>

					<!-- <div class="form-row">
						<div class="form-group col-md-4">
								<span>Publicado por: <?php echo $this->session->userdata('usuario') ?></span>
						</div>
					</div> -->
				</div>
			</div>
	</div>
</div>
