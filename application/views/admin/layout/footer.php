<footer class="footer text-right">
    © 2016. All rights reserved.
</footer>

</div>


</div>
<!-- END wrapper -->



<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/fastclick.js"></script>

<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.scrollTo.min.js"></script>



<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?php echo base_url() ?>template/admin/assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="<?php echo base_url() ?>template/admin/assets/pages/datatables.init.js"></script>


<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>template/admin/assets/js/jquery.app.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
      $('#datatable').dataTable();
      $('#datatable-keytable').DataTable({keys: true});
      $('#datatable-responsive').DataTable();
      $('#datatable-colvid').DataTable({
          "dom": 'C<"clear">lfrtip',
          "colVis": {
              "buttonText": "Change columns"
          }
      });
      $('#datatable-scroller').DataTable({
          ajax: "<?php echo base_url() ?>template/admin/assets/plugins/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
      });
      var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
      var table = $('#datatable-fixed-col').DataTable({
          scrollY: "300px",
          scrollX: true,
          scrollCollapse: true,
          paging: false,
          fixedColumns: {
              leftColumns: 1,
              rightColumns: 1
          }
      });
  });
  TableManageButtons.init();

</script>



</body>
</html>
