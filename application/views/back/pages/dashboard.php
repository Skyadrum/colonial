<title>Dashboard</title>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="margin-top:25px;">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url() ?>dashboard">Dashboard</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $this->session->userdata('usuario') ?></li>
    </ol>
    <h1>Administrar</h1>
    <hr>

    <!-- Icon Cards-->
    <div class="row text-center">
      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-comments"></i>
            </div>
            <div class="mr-5">Agregar Banner</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>">
            <span class="float-left">Agregar</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-list"></i>
            </div>
            <div class="mr-5">Agregar Notcias</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>">
            <span class="float-left">Agregar</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <!-- <i class="fa fa-fw fa-shopping-cart"></i> -->
              <i class="fa fa-fw fa-support"></i>
            </div>
            <div class="mr-5">Agregar Proyectos al Portafolios</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url(); ?>">
            <span class="float-left">Agregar</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div>

      <!-- <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fa fa-fw fa-support"></i>
            </div>
            <div class="mr-5">Agregar proyecto al Portafolios</div>
          </div>
          <a class="card-footer text-white clearfix small z-1" href="#">
            <span class="float-left">View Details</span>
            <span class="float-right">
              <i class="fa fa-angle-right"></i>
            </span>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</div>
