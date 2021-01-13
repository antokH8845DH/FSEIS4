<!-- Horizontal Form -->
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
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Tambah Accesorise</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

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
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
    </form>
</div>
<!-- /.card -->