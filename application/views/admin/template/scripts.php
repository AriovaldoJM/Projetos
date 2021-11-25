<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url("public/admin/plugins/jquery/jquery.min.js"); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("public/admin/dist/js/adminlte.min.js") ; ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url("public/admin/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/jszip/jszip.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/pdfmake/pdfmake.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/pdfmake/vfs_fonts.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.html5.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.print.min.js"); ?>"></script>
<script src="<?= base_url("public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"); ?>"></script>
<script>
  $(function () {
    $("#tabelalead").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>