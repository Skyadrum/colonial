      <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © LineCodeid 2018</small>
          </div>
        </div>
      </footer>

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">¿Estas seguro que deseas cerrar tu sesión?.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
              <a class="btn btn-primary" href="<?php echo base_url(); ?>Login/salir">Cerrar Sesión</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="<?= base_url(); ?>static/back/vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url(); ?>static/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="<?= base_url(); ?>static/back/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->
      <!-- <script src="<?= base_url(); ?>static/back/vendor/chart.js/Chart.min.js"></script> -->
      <script src="<?= base_url(); ?>static/back/vendor/datatables/jquery.dataTables.js"></script>
      <script src="<?= base_url(); ?>static/back/vendor/datatables/dataTables.bootstrap4.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="<?= base_url(); ?>static/back/js/sb-admin.min.js"></script>
      <!-- Custom scripts for this page-->
      <script src="<?= base_url(); ?>static/back/js/sb-admin-datatables.js"></script>
      <!-- <script src="<?= base_url(); ?>assets/back_src/js/sb-admin-charts.min.js"></script> -->
      <script src="<?php echo base_url(); ?>static/ckeditor/ckeditor.js"></script>
    </div>
  </body>
</html>
