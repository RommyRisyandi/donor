<section class="content">
        <div class="container-fluid">
<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA RIWAYAT DONOR
                            </h2>
                        </div>
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                </div>
                            </div>
                        <br>
                        <br>    
                        <div class="table-responsive">    
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>TANGGAL</th>
                                            <th>NAMA</th>
                                            <th>GOLONGAN DARAH</th>
                                            <th>LOKASI DONOR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($jadwal as $row => $r) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($r->tanggal_donor)); ?></td>
                                            <td><?php echo $r->nama; ?></td>
                                            <td><?php echo $r->golongan_darah; ?></td>
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