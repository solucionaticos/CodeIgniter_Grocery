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
<!-- jQuery UI 1.11.4 -->
<script src="{path_template_admin}bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{path_template_admin}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{path_template_admin}bower_components/raphael/raphael.min.js"></script>
<script src="{path_template_admin}bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{path_template_admin}bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{path_template_admin}plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{path_template_admin}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{path_template_admin}bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{path_template_admin}bower_components/moment/min/moment.min.js"></script>
<script src="{path_template_admin}bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{path_template_admin}bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{path_template_admin}plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{path_template_admin}bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{path_template_admin}bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{path_template_admin}dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{path_template_admin}dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{path_template_admin}dist/js/demo.js"></script>
</body>
</html>
