<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url(); ?>assets/Majene.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
        <img src="<?php echo base_url(); ?>assets/images/Lambang.png" width="100" height="100" class="class" />
            <a href="javascript:void(0);">SI MANDAR</a>
            <small><h3>Sistem Informasi Manajemen Donor Darah</h3></small>
        </div>
        <div class="card">
            <div class="body">
                <?php echo form_open('login/proseslogin'); ?>
                <form id="sign_in" method="POST">
                    <div class="msg">Silahkan Login Terlebuh dahulu!</div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <?php 
                                    // Notifikasi
                                    if($this->session->flashdata('sukses')) {
                                        echo '<p class="alert alert-success">';
                                        echo $this->session->flashdata('sukses');
                                    
                                    }
                                    ?>  
                                    <?php if(isset($pesan)){
                                        echo '<p class="alert alert-danger">';
                                        echo $pesan;  
                                        } ?>
                                </div>
                            </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                     
                        <button class="btn btn-block bg-pink waves-effect" type="submit">Masuk</button>
                    <div class="row m-t-15 m-b--20 align-center">
                            <a href="<?php echo site_url('user/daftar') ?>">Belum punya akun? Daftar Sekarang!</a>
                    </div>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/examples/sign-in.js"></script>
    <style>
    .class {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</body>

</html>