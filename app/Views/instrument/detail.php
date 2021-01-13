<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Instrument</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- About Me Box -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"></h3>
            <?php
            // print_r($instruments);
            // echo '<br>';
            // print_r($accesories);
            // exit();
            ?>
            <h2></h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <strong><i class="fas fa-map-marker-alt mr-1"></i> SN :</strong>

            <p class="text-muted">
                <?= $instruments->Serial_Number; ?>
            </p>
            <strong><i class="fas fa-phone mr-1"></i> Installed :</strong>

            <p class="text-muted"><?= $instrument->Installed; ?></p>
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
            <div class="card card-primary card-tabs">
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
                                                <td>
                                                    <a href="<?= site_url('customer/view/' . $instrument->id_custinst); ?>" class="btn btn-sm btn-primary">view</a>
                                                    <a href="#" class="btn btn-info btn-sm btn-detail" data-id="<?= $instrument->id_custinst; ?>">Detail</a>

                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                            UNDER CONSTRUCTION
                        </div>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
<!-- /.row -