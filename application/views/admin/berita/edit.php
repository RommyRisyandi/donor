<section class="content">
    <div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>TAMBAH INFORMASI & EDUKASI</h2>
                </div>
                <?php echo form_open_multipart('admin/aedit_b', 'class="form-horizontal"'); ?>
                <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <?php 
                        // Notifikasi
                        if($this->session->flashdata('gagal')) {
                            echo '<p class="alert alert-danger">';
                            echo $this->session->flashdata('gagal');
                        }
                        ?>  
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">add</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="id_beritaa" value="<?php echo $r->id_berita; ?>" placeholder="ID Berita..." readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">add</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="judul" value="<?php echo $r->judul; ?>" placeholder="Masukan Judul..." required autofocus>
                            </div>
                        </div>
                    </div>
                    <!-- row start -->
                    <b>Tanggal</b>
                    <div class="row clearfix">
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
                        <br>
                    </div> 
                    <!-- row end -->
                    <h2 class="card-inside-title">Isi Berita</h2>
                            <textarea id="ckeditor" name="isi">
                            <?php echo $r->isi; ?>
                            </textarea>
                    <br>
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">images</i>
                            </span>
                            <div class="form-line">
                                <input type="file" class="form-control" name="userfile" placeholder="Masukan File Foto/Gambar..." required autofocus>
                            </div>
                        </div>
                    </div>
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