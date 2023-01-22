<section class="content">
        <div class="container-fluid">
<!-- Exportable Table -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA PENDONOR
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>ID USER</th>
                                            <th>NAMA</th>
                                            <th>NIK</th>
                                            <th>EMAIL</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>NO.TELP/WA</th>
                                            <th>GOL.DARAH</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($user as $row => $r) { ?>
                                        <tr>
                                            <td><?php echo $r->id_user; ?></td>
                                            <td><?php echo $r->nama; ?></td>
                                            <td><?php echo $r->nik; ?></td>
                                            <td><?php echo $r->email; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($r->tanggal_lahir)); ?></td>
                                            <td><?php echo $r->no_telpon; ?></td>
                                            <td><?php echo $r->golongan_darah; ?></td>
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