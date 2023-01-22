<section class="content">
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>UBAH JADWAL GERAI DONOR</h2>
                </div>
                <?php echo form_open('admin/aedit', 'class="form-horizontal"'); ?>
                <div class="body">
                    <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">credit_card</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="id_jadwala" value="<?php echo $r->id_jadwal; ?>" placeholder="Masukan Lokasi Gerai Donor Darah..." readonly>
                                </div>
                            </div>
                        </div>

                    <!-- row start -->
                    <b>Hari, Tempat & Waktu</b>
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="hari" value="<?php echo $r->hari; ?>" placeholder="Masukan Hari..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="date" class="form-control date" name="tanggal" value="<?php echo $r->tanggal; ?>" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">access_time</i>
                                </span>
                                <div class="form-line">
                                    <input type="time" class="form-control time24" name="jam" value="<?php echo $r->jam; ?>" placeholder="Masukkan Jam Cth: 23:59" required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">home</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="lokasi" value="<?php echo $r->lokasi; ?>" placeholder="Masukan Lokasi Gerai Donor Darah..." required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->

                    

                       <button type="submit" name="submit" class="btn btn-success waves-effect">
                        <i class="material-icons">save</i>
                        <span>Simpan</span></button>
                       <button type="reset"  name="reset" class="btn btn-danger waves-effect">
                        <i class="material-icons">close</i>
                        <span>Bersihkan</span></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    </div>
</section>