<title>Panel de Control | Agregar Productos</title>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
      <ol class="breadcrumb" style="margin-top:25px;">
        <li class="breadcrumb-item">
          <a href="#">Productos</a>
        </li>
        <li class="breadcrumb-item active">Nuevo Producto</li>
      </ol>

			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-bookmark"></i> Agregar Nuevo Producto
					<a href="" class="btn btn-primary btn-small float-right">Regresar</a>
				</div>

				<!-- Contenido -->
				<div class="card-body">

					<!-- Mensaje en caso de error -->
					<!-- Fin del Mensaje -->

					<form method="post" action="<?php echo base_url() ?>back/Productos/agregar" enctype="multipart/form-data">

						<div class="form-row">
              <div class="form-group col-md-3">
				        <label for="imagen">Imagen:</label>
				        <input type="file" class="form-control-file" id="imagen" name="imagen">
				      </div>

							<div class="form-group col-md-3">
				        <label for="img1">Imagen 1:</label>
				        <input type="file" class="form-control-file" id="imagen" name="img1">
				      </div>

							<div class="form-group col-md-3">
				        <label for="img2">Imagen 2:</label>
				        <input type="file" class="form-control-file" id="imagen" name="img2">
				      </div>

							<div class="form-group col-md-3">
				        <label for="img3">Imagen 3:</label>
				        <input type="file" class="form-control-file" id="imagen" name="img3">
				      </div>
            </div>

				    <div class="form-row">
              <div class="form-group col-md-4">
				        <label for="nombre">Nombre:</label>
				        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
				      </div>

							<div class="form-group col-md-8">
				        <label for="descripcion">Descripcion:</label>
                <textarea name="descripcion" rows="8" cols="100" class="form-control ckeditor" placeholder="Descripción del Producto"></textarea>
				      </div>
            </div>

            <hr>

            <div class="form-row">
              <div class="form-group col-md-4">
				        <label for="precio">Precio:</label>
				        <input type="text" class="form-control" id="precio" name="precio">
				      </div>

              <div class="form-group col-md-4">
				        <label for="stock">Stock:</label>
				        <input type="text" class="form-control" id="stock" name="stock">
				      </div>

              <div class="form-group col-md-2 offset-md-1" style="margin-top: 30px">
                <button type="submit" class="btn btn-primary btn-outline-success btn-block float-right">Agregar Producto</button>
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
