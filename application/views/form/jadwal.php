<section class="content">
        <div class="container-fluid">
<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                JADWAL GERAI DONOR
                            </h2>
                        </div>
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                            
                                </div>
                            </div>
                        <div class="table-responsive">    
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>HARI,TANGGAL DAN WAKTU</th>
                                            <th>LOKASI</th>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($jadwal as $row => $r) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r->hari." ".date('d-m-Y',strtotime($r->tanggal))." ".$r->jam; ?></td>
                                            <td><?php echo $r->lokasi; ?></td>
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