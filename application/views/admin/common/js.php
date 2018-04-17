<!-- BEGIN VENDOR JS-->
  <script src="<?= base_url() ?>assets/admin/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="<?= base_url() ?>assets/admin/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/pickers/dateTime/moment-with-locales.min.js"
  type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js"
  type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/charts/jquery.sparkline.min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="<?= base_url() ?>assets/admin/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/js/core/app.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/admin/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  
  <script>
  $('.zero-configuration').DataTable({
    "ordering": false,
  });
  $('.datepicker-date').datetimepicker({
      format: 'DD-MM-YYYY',
      minDate:new Date(),
    });
  </script>


<?php if ($this->session->flashdata('success')) { ?>
  <script>
    toastr.success('<?= $this->session->flashdata('success') ?>', 'Success!', {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
  </script>
    
<?php } ?>
<?php if ($this->session->flashdata('error')) { ?>
  <script>
    toastr.error('<?= $this->session->flashdata('error') ?>', 'Error!', {"showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 2000});
  </script>
<?php } ?>
<?php
if(isset($script)){
$this->load->view($this->folder.'/scripts/'.$script);
}
?>



