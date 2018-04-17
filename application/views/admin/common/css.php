    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title><?= $pageTitle ?></title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/admin/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/admin/images/ico/favicon.ico">
    
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/extensions/toastr.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/app.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/pages/users.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/style.css">
    <!-- END Custom CSS-->

    <?php
    if(isset($style)){
    $this->load->view($this->folder.'/style/'.$style);
    }
    ?>
    

    

