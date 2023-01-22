<section class="content">
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>TAMBAH KEBUTUHAN</h2>
                </div>
                <?php echo form_open('admin/aedit_k', 'class="form-horizontal"'); ?>
                <div class="body">
                    <!-- row start -->
                    
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">credit_card</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="id_kebutuhana" value="<?php echo $r->id_kebutuhan; ?>" placeholder="Masukan Nomor RM..." readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">credit_card</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="no_rm" value="<?php echo $r->no_rm; ?>" placeholder="Masukan Nomor RM..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama_os" value="<?php echo $r->nama_os; ?>" placeholder="Masukan Nama Orang Sakit..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                        <b>Alamat</b>
                        <div class="input-group">
                            <div class="form-line">
                                <textarea rows="4" class="form-control no-resize" name="alamat" placeholder="Masukkan Alamat Rumah Anda yang Sekarang..."><?php echo $r->alamat; ?></textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">opacity</i>
                                </span>
                                <div class="form-line">
                                    <input type="number" class="form-control" name="permintaan" value="<?php echo $r->permintaan; ?>" placeholder="Masukan Jumlah Permintaan..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <select name="golongan_darah" class="form-control show-tick">
                                <option value="disabled selected">Pilih Golongan Darah</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                            
                        <div class="col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="dokter" value="<?php echo $r->dokter; ?>" placeholder="Masukan Nama Dokter..." required autofocus>
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