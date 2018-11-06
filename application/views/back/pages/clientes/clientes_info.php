<title>Panel de Control | Editar clientes</title>

<div class="content-wrapper">
	<div class="container-fluid">
		<!-- Breadcrumbs-->
      <ol class="breadcrumb" style="margin-top: 25px;">
        <li class="breadcrumb-item">
          <a href="index.html">Clientes</a>
        </li>
        <li class="breadcrumb-item active">Clientes Registrados</li>
      </ol>

			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-users"></i> Información de <?php echo $cliente->nombre.' '.$cliente->apellidos ?>
					<a href="<?php echo base_url() ?>clientes" class="btn btn-primary btn-small float-right">Regresar</a>
				</div>

				<!-- Contenido -->
				<div class="card-body">

					<?php echo form_open(''); ?>
            <input type="hidden" name="idCliente" value="<?php echo $cliente->id_cliente ?>">

				    <div class="form-row">
				      <div class="form-group col-md-6">
				        <label for="nombre">Nombre:</label>
								<span><?php echo $cliente->nombre.' '.$cliente->apellidos ?></span>
				      </div>

              <div class="form-group col-md-6">
				        <label for="correo">Correo:</label>
								<span><?php echo $cliente->correo ?></span>
				      </div>
				    </div>

				    <div class="form-row">
              <div class="form-group col-md-6">
								<label for="telefono">Telefono:</label>
								<span><?php echo $cliente->telefono ?></span>
              </div>

              <div class="form-group col-md-6">
                <label for="pais">Pais:</label>
                <span><?php echo $cliente->pais ?></span>
              </div>
				    </div>

						<div class="form-row">
              <div class="form-group col-md-6">
								<label for="direccion">Dirección:</label>
								<span><?php echo $cliente->direccion ?></span>
              </div>

              <div class="form-group col-md-6">
                <label for="pais">Colonia:</label>
                <span><?php echo $cliente->colonia ?></span>
              </div>
				    </div>

						<div class="form-row">
              <div class="form-group col-md-6">
								<label for="municipio">Municipio:</label>
								<span><?php echo $cliente->municipio ?></span>
              </div>

              <div class="form-group col-md-6">
                <label for="estado">Estado:</label>
                <span><?php echo $cliente->estado ?></span>
              </div>
				    </div>

						<div class="form-row">
              <div class="form-group col-md-6">
								<label for="telefono">Codigo Postal:</label>
								<span><?php echo $cliente->cp ?></span>
              </div>
				    </div>

						<!-- <div class="form-row">
							<div class="form-group col-md-6 offset-md-6">
                <button type="submit" class="btn btn-primary btn-outline-success float-right">Actualizar Datos </button>
              </div>
						</div> -->
				  </form>
				</div>
			</div>
	</div>
</div>
