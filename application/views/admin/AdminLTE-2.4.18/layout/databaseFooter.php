<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  </div>
  <!-- /.content-wrapper -->

  <?php if (isset($footer)) {echo $footer;} ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{path_template_admin}bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{path_template_admin}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="{path_template_admin}bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{path_template_admin}bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- bootstrap datepicker -->
<script src="{path_template_admin}plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- sweetalert2 -->
<script src="{path_template_admin}plugins/sweetalert2/sweetalert2.all.js"></script>

<!-- SlimScroll -->
<script src="{path_template_admin}bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{path_template_admin}bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{path_template_admin}dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{path_template_admin}dist/js/demo.js"></script>
<!-- jQuery Validation Plugin -->
<script src="{path_template_admin}plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Variables -->
<?php if (isset($proyVar)) {echo $proyVar;} ?>
<?php if (isset($txtVar)) {echo $txtVar;} ?>

<!-- page script -->
<?php if (isset($script)) {echo $script;} ?>
<script>
  $(function () {
    // $('#example1').DataTable()
  })
</script>
</body>
</html>