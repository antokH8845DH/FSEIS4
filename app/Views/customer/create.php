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
        <h3 class="card-title">Tambah Customer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open('customer/create'); ?>
    <form class="form-horizontal">
        <div class="card-body">
            <div class="form-group row">
                <label for="noPam" class="col-sm-2 col-form-label">Customer</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Customer" placeholder="Customer Name" name="Customer">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Address" placeholder="Address" name="Address">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKtp" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="City" placeholder="City" name="City">
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Province</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Province" placeholder="Province" name="Province">
                </div>
            </div> -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Province</label>
                <div class="col-sm-8">
                    <select name="Province" class="form-control province" placeholder="province">
                        <option value="">Choose Province</option>
                        <?php foreach ($province as $row) : ?>
                            <option value="<?= $row['province']; ?>"><?= $row['province']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="RT" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Phone" placeholder="Phone" name="Phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="RT" class="col-sm-2 col-form-label">Contact Person</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ContactPerson" placeholder="ContactPerson" name="ContactPerson">
                </div>
            </div>
            <div class="form-group row">
                <label for="RW" class="col-sm-2 col-form-label">CustomerOISID</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="CustomerOISID" placeholder="CustomerOISID" name="CustomerOISID">
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Tambah</button>
            <button type="submit" class="btn btn-default float-right">Batal</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->