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
    
    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    
    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/images/Lambang.png" width="100" height="100" class="class" />   
            <a href="javascript:void(0);">SI MANDAR</a>
            <small><h3>Sistem Informasi Manajemen Donor Darah</h3></small>
        </div>
        <div class="card">
            <div class="body">
                <?php echo form_open('user/adaftar'); ?>
                <form id="sign_up" method="POST">
                    <div class="msg">Silahkan daftar akun anda!</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">credit_card</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nik" placeholder="NIK" required>
                        </div>
                    </div>
                    <select name="jenis_kelamin" class="form-control show-tick">
                        <option value="disabled selected">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <br>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <!-- row start -->
                    <b>Tempat & Tanggal Lahir</b>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">home</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="date" class="form-control date" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <b>Alamat</b>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" name="alamat" placeholder="Masukkan Alamat Rumah Anda yang Sekarang..."></textarea>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone_iphone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control mobile-phone-number" name="no_telpon" placeholder="No.Telp/WA yang aktif">
                        </div>
                    </div>
                    <!-- row start -->
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">scale</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">height</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan" required autofocus>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- row end -->
                    <select name="golongan_darah" class="form-control show-tick" required autofocus>
                        <option value="disabled selected">Pilih Golongan Darah</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                       <br>            
                        <div class="form-line">
                            <input type="hidden" class="form-control" name="level" value="user">
                        </div>
                    <br>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Daftar</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo site_url('user/login'); ?>">Sudah Punya Akun? Silahkan Login</a>
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
    
    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pages/examples/sign-up.js"></script>
    
    <style>
    .class {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
    
</body>

</html>