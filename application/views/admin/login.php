<!DOCTYPE html>
<html class="loading" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  
  <title><?= $pageTitle; ?></title>
  <link rel="apple-touch-icon" href="<?= base_url() ?>assets/admin/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/admin/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page"
 data-menu="vertical-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="<?= base_url() ?>/assets/admin/images/logo/stack-logo-dark.png" alt="branding logo">
                    </div>
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                    <span>Account Details</span>
                    
                  </p>
                  <div class="card-body pt-0">
                    <div class="alert bg-success alert-dismissible mb-2">
                        <p>Testing Purpose</p>
                    </div>
                    <form class="form-horizontal" id="loginform" method="post">
                      <fieldset class="form-group floating-label-form-group">
                        <label for="user-name">Your Email</label>
                        <input type="text" class="form-control round" name="email" id="email" placeholder="Your Email">
                      </fieldset>
                      <fieldset class="form-group floating-label-form-group mb-1">
                        <label for="user-password">Enter Password</label>
                        <input type="password" name="password" class="form-control round" id="password" placeholder="Enter Password">
                      </fieldset>
                      <button type="button" onclick="return get_login()" class="btn btn-outline-primary btn-block round"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
<script src="<?= base_url() ?>assets/admin/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->

<?php
if(isset($script)){
    $this->load->view($this->folder.'/scripts/'.$script);
}
?>
</body>
</html>