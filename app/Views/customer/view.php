<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Customer</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- About Me Box -->
    <div class="card card-info">
        <div class="card-header card-secondary">
            <h3 class="card-title"></h3>
            <h3><?= $customer->Customer ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <strong><i class="fas fa-map-marker-alt mr-1"></i> Address :</strong>

            <p class="text-muted">
                <?= $customer->Address . ', ' . $customer->City . '<br>' . $customer->Province; ?>
            </p>
            <strong><i class="fas fa-phone mr-1"></i> Phone :</strong>

            <p class="text-muted"><?= $customer->Phone; ?></p>
        </div>
        <div class="card-footer">
            <div class="col-md-1">
                <a href="#" class="btn btn-sm btn-outline-info btn-block btn-flat btn-add"><i class="fa fa-plus-circle"></i> Add</a>
            </div>
        </div>
        <!-- /.card-body -->
    </div>


    <!-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">INSTRUMENTS DETAIL</h5>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ./row -->
    <div class="row">

        <div class="col-12">
            <div class="card card-lightblue card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">INSTRUMENTS</h3>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Non Active</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-two-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Instrument/SN</th>
                                            <th style="text-align: center;">Installed</th>
                                            <th style="text-align: center;">Note</th>
                                            <th style="text-align: center;">Sertificate</th>
                                            <th style="text-align: center;">QC</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($instruments as $index => $instrument) : ?>
                                            <tr>
                                                <td>
                                                    <?= $instrument->Instrument_Name . '<br>' . $instrument->Serial_Number; ?>
                                                </td>
                                                <td><?= $instrument->Installed . '<br>' . $instrument->Status . '<br>' . $instrument->tech1; ?> </td>
                                                <td><?= $instrument->Note . '<br>' . $instrument->Comment; ?></td>
                                                <td><?= 'LastCalDate :' . $instrument->LastCalDate . '<br>Valid Until:' . $instrument->LastCalDateValidUntil . '<br>Certificate' . $instrument->LastCalCertificate; ?></td>
                                                <td><?= 'LastCalDate :' . $instrument->LastCalDate . '<br>Valid Until:' . $instrument->LastCalDateValidUntil . '<br>Certificate' . $instrument->LastCalCertificate; ?></td>
                                                <td style="text-align: center;">
                                                    <a href="<?= site_url('customer/detailInstrument/' . $instrument->id_custinst); ?>" class="btn btn-sm btn-primary">Detail</a>
                                                    <!-- <a href="<?= site_url('customer/recallInstrument/' . $instrument->id_custinst); ?>" class="btn btn-sm btn-warning">Recall</a>
                                                    <a href="<?= site_url('customer/ChangeInstrument/' . $instrument->id_custinst); ?>" class="btn btn-sm btn-success">Change</a> -->
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                            <div class="card-body p-0">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Instrument/SN</th>
                                            <th style="text-align: center;">Installed</th>
                                            <th style="text-align: center;">Note</th>
                                            <th style="text-align: center;">Sertificate</th>
                                            <th style="text-align: center;">QC</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($instna as $index => $instna) : ?>
                                            <tr>
                                                <td>
                                                    <?= $instna->Instrument_Name . '<br>' . $instna->Serial_Number; ?>
                                                </td>
                                                <td><?= $instna->Installed . '<br>' . $instna->Status . '<br>' . $instna->tech1; ?> </td>
                                                <td><?= $instna->Note . '<br>' . $instna->Comment; ?></td>
                                                <td><?= 'LastCalDate :' . $instna->LastCalDate . '<br>Valid Until:' . $instna->LastCalDateValidUntil . '<br>Certificate' . $instna->LastCalCertificate; ?></td>
                                                <td><?= 'LastCalDate :' . $instna->LastCalDate . '<br>Valid Until:' . $instna->LastCalDateValidUntil . '<br>Certificate' . $instna->LastCalCertificate; ?></td>
                                                <td>
                                                    <a href="<?= site_url('customer/detailinstrument/' . $instna->id_custinst); ?>" class="btn btn-sm btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <!-- modal edit -->
    <div class="modal fade" id="addInstrument">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Instrument</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?= site_url(); ?>/Instrument/addInstrument" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID Customer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control id" name="id_cust" value="<?= $customer->No; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control customer" placeholder="customer" name="Customer" value="<?= $customer->Customer; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Instrument Name</label>
                            <div class="col-sm-8">
                                <select name="Instrument_Name" class="form-control province" placeholder="Instrument Name">
                                    <option value="">Choose Instrument</option>
                                    <?php foreach ($catinstrument as $index => $IN) : ?>
                                        <option value="<?= $IN['Instrument_Name']; ?>"><?= $IN['Instrument_Name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Serial Number</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control phone" placeholder="Serial Number" name="Serial_Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Install Date</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control tanggal" placeholder="Install Date" name="Installed">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select name="Status" class="form-control province" placeholder="Status">
                                    <option value="">Choose Status</option>
                                    <option value="KSO">KSO</option>
                                    <option value="SOLD">SOLD</option>
                                    <option value="DEMO">DEMO</option>
                                    <option value="OTHER">OTHER</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mark</label>
                            <div class="col-sm-8">
                                <select name="Status" class="form-control province" placeholder="Mark">
                                    <option value="">Choose Mark</option>
                                    <option value="New">New</option>
                                    <option value="Replace">Replace</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Comment</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control " placeholder="Comment" name="Comment">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Technician</label>
                            <div class="col-sm-8">
                                <select name="Teknisi" class="form-control province" placeholder="Technician">
                                    <option value="">Choose Technician</option>
                                    <?php foreach ($teknisi as $t) : ?>
                                        <option value="<?= $t['Teknisi']; ?>"><?= $t['Teknisi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
<!-- /.row -->
<!-- /.card -->
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        // get Add Instrument
        $('.btn-add').on('click', function() {
            $('#addInstrument').modal('show');
        });
    });
</script>
<?= $this->endSection('script'); ?>