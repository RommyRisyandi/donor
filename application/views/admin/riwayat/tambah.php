<section class="content">
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>TAMBAH RIWAYAT DONOR</h2>
                </div>
                <?php echo form_open('admin/atambah_r', 'class="form-horizontal"'); ?>
                <div class="body">
                    <!-- row start -->
                    
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pendonor..." required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <select name="golongan_darah" class="form-control show-tick" required autofocus>
                                <option value="disabled selected">Pilih Golongan Darah...</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="AB">AB</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <select name="id_jadwal" class="form-control show-tick" required autofocus>
                                <option value="disabled selected">Pilih Lokasi Donor...</option>
                                <?php foreach($jadwal as $jadwal): ?>
                                
                                <option value="<?php echo $jadwal->id_jadwal; ?>"><?php echo $jadwal->lokasi; ?></option>
                                
                                <?php endforeach ?>
                            </select>
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