<section class="content">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>INFORMASI & EDUKASI</h2>
                    </div>
                    <div class="body">
                        <div class="row">
                                <?php foreach ($berita as $row =>$r) { ?>
                                <div class="col-sm-6 col-lg-12 col-md-3">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url('/assets/upload/foto/'.$r->foto); ?>" class="img img-responsive img-thumbnail" width="70%">
                                        <div class="caption">
                                            <h3><?php echo $r->judul; ?></h3>
                                            <p><?php echo date('d-m-Y',strtotime($r->tanggal)); ?></p>
                                            <p>
                                                <?php echo $r->isi; ?>
                                            </p>
                                            <p>
                                                <a href="<?php echo site_url('form/detail/').$r->id_berita;?>" class="btn btn-primary waves-effect" role="button"><i class="material-icons"></i>SELENGKAPNYA...</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

