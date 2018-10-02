<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="<?php echo base_url(); ?>back/Dashboard/index">LineCodeId - Panel Administrativo</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?= base_url(); ?>back/roles/listado">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">Roles</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="<?= base_url(); ?>back/usuarios/listado">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Usuarios</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="<?= base_url(); ?>back/servicios/listado">
          <i class="fa fa-product-hunt" aria-hidden="true"></i>
          <span class="nav-link-text">Servicios</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="<?= base_url(); ?>back/clientes/listado">
          <i class="fa fa-user-plus" aria-hidden="true"></i>
          <span class="nav-link-text">Clientes</span>
        </a>
      </li>
      <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="tables.html">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Tables</span>
        </a>
      </li> -->
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-newspaper-o"></i>
          <span class="nav-link-text">Contenido</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="<?php echo base_url(); ?>back/banners/listado">Banner</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>back/noticias/listado">Noticas</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>back/portafolios/listado">Portafolios</a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>back/correos/listado">Correos</a>
          </li>
        </ul>
      </li>

    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>

    <!-- Header Bar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span><?php echo $this->session->userdata('usuario') ?></span>
          <img src="<?= base_url(); ?>media/users/<?= $this->session->userdata('imagen') ?>" class="img .img-fluid rounded-circle" height="40px;" width="40px;">
          <!-- <i class="fa fa-fw fa-envelope"></i> -->
        </a>
        <div class="dropdown-menu text-center" style="background-color: #F6F7F9;">
          <h6 class="dropdown-header">Opciones:</h6>
          <div class="dropdown-divider"></div>
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <div class="text-center" style="color: #000;">
              <i class="fa fa-fw fa-sign-out"></i>
              <span style="color: #000;"> Cerrar Sesión</span>
            </div>
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
