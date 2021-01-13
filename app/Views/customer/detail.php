<?php
$session = session();
$errors = $session->getFlashData('errors');
?>
<?php
if ($errors != null) : ?>
    <div class="alert alert-danger alert-dismissible ">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Terjadi Kesalahan</h5>
        <p class="mb-0">
            <?php
            foreach ($errors as $err) {
                echo $err . '<br>';
            }
            ?>
        </p>
    </div>
<?php endif ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Detail Instrument</h2>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- About Me Box -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"></h3>

            <h3> <?= $instrument->Instrument_Name;
                    // exit();
                    ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <strong>Customer : </strong><?= $instrument->Customer; ?>
            <br>
            <strong>SN : </strong><?= $instrument->Serial_Number; ?>
            <br>
            <strong>Installed : </strong><?= $instrument->Installed; ?>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card card-olive card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                        <li class="pt-2 px-3">
                            <h3 class="card-title">Accesories</h3>
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
                                <div style="margin-bottom: 10px;">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-accesories">
                                        Add Accesories
                                    </button>
                                </div>
                                <?php if ($accesories) :
                                ?>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Date|SJ</th>
                                                <th style="text-align: center;">Item|SN</th>
                                                <th style="text-align: center;">Qty|Cond.</th>
                                                <th style="text-align: center;">Note</th>
                                                <th style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($accesories as $index => $accesories) : ?>
                                                <tr>
                                                    <td><?= ($index + 1); ?></td>
                                                    <td>
                                                        <?= $accesories->date . '<br>' . $accesories->sj; ?>
                                                    </td>
                                                    <td><?= $accesories->item . '<br>' . $accesories->sn;  ?> </td>
                                                    <td style="text-align: center;"><?= $accesories->qty . '<br>' . $accesories->kondisi; ?></td>
                                                    <td><?= $accesories->note; ?></td>
                                                    <td style="text-align: center;">

                                                        <a href="#" class="btn btn-sm btn-primary btn-recall" data-id="<?= $instrument->id_custinst; ?>">Recal</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                <?php
                                else :
                                    echo '<p><b>No Accesories Data</b></p>';
                                endif
                                ?>
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
    <div class="row">
        <div class="col-12">
            <div class="card card-teal card-tabs">
                <div class="card-header">
                    <h3 class="card-title">SparePart Changed</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->
                            <!-- <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"> -->
                            <!-- <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sparepart">
                            Add Sparepart
                        </button>
                    </div>
                    <?php if ($sparepart) : ?>
                        <table class="table table-bordered table-hover" id="example3">
                            <thead>
                                <tr>
                                    <th>Date|SJ</th>
                                    <th>Item</th>
                                    <th>LOT|ED</th>
                                    <th>Qty</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sparepart as $index => $sp) : ?>
                                    <tr>
                                        <td><?= $sp->date . '<br>' . $sp->surat_jalan; ?></td>
                                        <td><?= $sp->item; ?></td>
                                        <td><?= $sp->lot . '<br>' . $sp->ed; ?></td>
                                        <td><?= $sp->qty; ?></td>
                                        <td><?= $sp->note; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else :
                        echo "<b>No Sparepart Data";
                    endif ?>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>

    <div class="modal fade" id="modal-sparepart">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Sparepart</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-accesories">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Accesories</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url(); ?>/Instrument/addAccesories" method="POST">
                        <div class="modal-body">
                            <div class="form-group row">
                                <!-- <label class="col-sm-3 col-form-label">ID Instrument</label> -->
                                <div class="col-sm-7">
                                    <input type="text" class="form-control id" name="id_cust" value="<?= $idcust; ?>" hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <!-- <label class="col-sm-3 col-form-label">ID Customer</label> -->
                                <div class="col-sm-7">
                                    <input type="text" class="form-control id" name="id_cust_inst" value="<?= $instrument->id_custinst; ?>" hidden>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Instrument Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control customer" placeholder="Instrument_Name" name="Instrument_Name" value="<?= $instrument->Instrument_Name; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control tanggal" placeholder="Date" name="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">SJ</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control phone" placeholder="SJ" name="sj">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Accesories Name</label>
                                <div class="col-sm-7">
                                    <select name="item" class="form-control province" placeholder="Accesories Name">
                                        <option value="">Choose Accesories</option>
                                        <?php foreach ($item as $index => $item) : ?>
                                            <option value="<?= $item['item']; ?>"><?= $item['item']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Serial Number</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control " placeholder="Serial Number" name="sn">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Qty</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control " placeholder="Qty" name="qty">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Condition</label>
                                <div class="col-sm-7">
                                    <select name="kondisi" class="form-control province" placeholder="Kondisi">
                                        <option value="">Choose Status</option>
                                        <option value="New">New</option>
                                        <option value="Second">Second</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Note</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control " placeholder="Note" name="note">
                                </div>
                            </div>
                            <!-- <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div> -->
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- modal tambah sparepart -->
    <div class="modal fade" id="addSparepart">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Sparepart</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?= site_url(); ?>/Instrument/addSparepart" method="POST">
                    <div class="modal-body">
                        <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">ID Instrument</label> -->
                            <div class="col-sm-7">
                                <input type="text" class="form-control id" name="id_cust" value="<?= $idcust; ?>" hidden>
                            </div>
                        </div>
                        <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">ID Customer</label> -->
                            <div class="col-sm-7">
                                <input type="text" class="form-control id" name="id_cust_inst" value="<?= $instrument->id_custinst; ?>" hidden>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Instrument Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control customer" placeholder="Instrument_Name" name="Instrument_Name" value="<?= $instrument->Instrument_Name; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control tanggal" placeholder="Date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">SJ</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control phone" placeholder="SJ" name="sj">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Serial Number</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control " placeholder="Serial Number" name="sn">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Qty</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control " placeholder="Qty" name="qty">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Condition</label>
                            <div class="col-sm-7">
                                <select name="kondisi" class="form-control province" placeholder="Kondisi">
                                    <option value="">Choose Status</option>
                                    <option value="New">New</option>
                                    <option value="Second">Second</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Note</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control " placeholder="Note" name="note">
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
<?= $this->section('script'); ?>

<script>
    $(document).ready(function() {


        // $('.btn-addSpart').on('click', function() {
        //     // get data from button edit
        //     // const id_custinst = $(this).data('idc');
        //     // // Set data to Form Edit
        //     // $('.productID').val(id_custinst);
        //     // Call Modal Edit
        //     $('#addSparepart').modal('show');
        // });
        $('.btn-recall').on('click', function() {
            // get data from button edit
            const id = $(this).data('id');
            // Set data to Form Edit
            $('.productID').val(id);
            // Call Modal Edit
            $('#deleteModal').modal('show');
        });
    });
    $(document).ready(function() {
        // $('.btn-addacc').on('click', function() {
        //     // get data from button edit
        //     const id_custinst = $(this).data('ida');
        //     // // Set data to Form Edit
        //     $('.productID').val(id_custinst);
        //     // Call Modal Edit
        //     $('#addAccessories').modal('show');
        // });
        $('.btn-recal2').on('click', function() {
            // get data from button edit
            const id_custinst = $(this).data('id');
            // // Set data to Form Edit
            $('.productID').val(id_custinst);
            // Call Modal Edit
            $('#addAccModal').modal('show');
        });
    });
</script>
<?= $this->endSection('script'); ?>