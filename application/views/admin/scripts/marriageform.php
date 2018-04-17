<!-- page specific plugins -->
<!-- parsley (validation) -->
<script>
    // load parsley config (altair_admin_common.js)
    altair_forms.parsley_validation_config();
    // load extra validators
    altair_forms.parsley_extra_validators();
</script>
<script src="<?= base_url() ?>assets/admin/bower_components/parsleyjs/dist/parsley.min.js"></script>
<!-- jquery steps -->
<script src="<?= base_url() ?>assets/admin/js/custom/wizard_steps.min.js"></script>
<!-- handlebars.js -->
<!--<script src="<?= base_url() ?>assets/admin/bower_components/handlebars/handlebars.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/custom/handlebars_helpers.min.js"></script>-->

<!--  forms wizard functions -->
<script src="<?= base_url() ?>assets/admin/js/pages/forms_wizard.min.js"></script>

<!-- page specific plugins -->
<!--  dropify -->
<script src="<?= base_url() ?>assets/admin/js/custom/dropify/dist/js/dropify.min.js"></script>

<!--  form file input functions -->
<script src="<?= base_url() ?>assets/admin/js/pages/forms_file_input.min.js"></script>