<section class="content">
        <div class="container-fluid">
            <!-- Body Copy -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php echo $r->judul; ?>
                            </h2>
                        </div>
                        <div class="body">
                        <img src="<?php echo base_url('/assets/upload/foto/'.$r->foto); ?>" class="img img-responsive img-thumbnail" width="900">
                            <br>
                            <br>
                            <p>
                                <?php echo date('d-m-Y',strtotime($r->tanggal)); ?>
                            </p>
                            <p>
                                <?php echo $r->isi; ?>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>