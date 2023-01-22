<section class="content">
    <div class="container-fluid">


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>PROFIL ANDA</h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                        
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" value="<?php echo $this->session->userdata('nama'); ?>" disabled="disabled">
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">credit_card</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nik" value="<?php echo $this->session->userdata('nik'); ?>" disabled="disabled">
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $this->session->userdata('jenis_kelamin'); ?>" disabled="disabled">
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" value="<?php echo $this->session->userdata('email'); ?>" disabled="disabled">
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
                                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $this->session->userdata('tempat_lahir'); ?>" disabled="disabled">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control date" name="tanggal_lahir" value="<?php echo $this->session->userdata('tanggal_lahir'); ?>" disabled="disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->


                    <b>Alamat</b>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" name="alamat" disabled="disabled"><?php echo $this->session->userdata('alamat'); ?></textarea>
                        </div>
                    </div>


                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone_iphone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control mobile-phone-number" name="no_telpon" value="<?php echo $this->session->userdata('no_telpon'); ?>" disabled="disabled">
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
                                    <input type="text" class="form-control" name="berat_badan" value="<?php echo $this->session->userdata('berat_badan'); ?>" disabled="disabled">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">height</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tinggi_badan" value="<?php echo $this->session->userdata('tinggi_badan'); ?>" disabled="disabled">
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- row end -->
                    <div class="row clearfix">
                    <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">height</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="golongan_darah" value="<?php echo $this->session->userdata('golongan_darah'); ?>" disabled="disabled">
                                </div>
                            </div> 
                        </div>
                    </div>
                       <br>
                       <br>
                       <button type="button" class="btn btn-success waves-effect" disabled="disabled">SUCCESS</button>
                       <button type="button" class="btn btn-danger waves-effect" disabled="disabled">DANGER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>