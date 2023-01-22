<section class="content">
        <div class="container-fluid">
<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA STOK DARAH
                            </h2>
                        </div>
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <?php
                                    // Notifikasi
                                    if($this->session->flashdata('sukses')) {
                                        echo '<p class="alert alert-success">';
                                        echo $this->session->flashdata('sukses');
                                        
                                    }
                                    ?>
                                </div>
                            </div>
                        <a href="<?php echo site_url('admin/tambah_S'); ?>"> 
                        <button type="button" class="btn btn-success waves-effect">
                                    <i class="material-icons">assignment</i>
                                    <span>Upload Stok Darah</span>
                                </button></a>
                        <br>
                        <br>    
                        <div class="table-responsive">    
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>KODE DARAH</th>
                                            <th>GOLONGAN DARAH</th>
                                            <th>KETERANGAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($stok as $row => $r) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r->kode_darah; ?></td>
                                            <td><?php echo $r->golongan_darah; ?></td>
                                            <td><?php echo $r->keterangan; ?></td>
                                            <td><a href="<?php echo site_url('admin/edit_s/').$r->id_stok?>">
                                                <button type="button" class="btn btn-warning waves-effect">
                                                <i class="material-icons">settings</i></button></a> |
                                                <a href="<?php echo site_url('admin/hapus5/').$r->id_stok?>"
                                                onClick="return confirm('apakah anda yakin ingin menghapus Data ini?')">
                                                <button type="button" class="btn btn-danger waves-effect">
                                                <i class="material-icons">delete</i></button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
</div>
</section>