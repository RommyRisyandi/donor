<section class="content">
        <div class="container-fluid">
<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA KEBUTUHAN
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
                                            <th>TANGGAL</th>
                                            <th>NO.RM</th>
                                            <th>NAMA ORANG SAKIT</th>
                                            <th>ALAMAT</th>
                                            <th>PERMINTAAN BAG DARAH</th>
                                            <th>GOLONGAN DARAH</th>
                                            <th>DOKTER YANG MEMINTA</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($kebutuhan as $row => $r) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($r->tanggal)); ?></td>
                                            <td><?php echo $r->no_rm; ?></td>
                                            <td><?php echo $r->nama_os; ?></td>
                                            <td><?php echo $r->alamat; ?></td>
                                            <td><?php echo $r->permintaan; ?> Bag</td>
                                            <td><?php echo $r->golongan_darah; ?></td>
                                            <td><?php echo $r->dokter; ?></td>
                                            
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