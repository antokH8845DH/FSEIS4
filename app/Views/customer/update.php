<!-- Horizontal Form -->
<?php

use function PHPSTORM_META\type;

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
        <h3 class="card-title">Update Customer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <?= form_open('customer/updateCustomer'); ?>
    <form class="form-horizontal">
        <div class="card-body">
            <div class="form-group row">
                <label for="noPam" class="col-sm-2 col-form-label" hidden>ID Customer</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="No" placeholder="No" name="No" value="<?= $customer->No; ?>" hidden>
                </div>
            </div>
            <div class="form-group row">
                <label for="noPam" class="col-sm-2 col-form-label">Customer</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Customer" placeholder="Customer Name" name="Customer" value="<?= $customer->Customer; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Address" placeholder="Address" name="Address" value="<?= $customer->Address; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="noKtp" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="City" placeholder="City" name="City" value="<?= $customer->City; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Province</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Province" placeholder="Province" name="Province" value="<?= $customer->Province; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="RT" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="Phone" placeholder="Phone" name="Phone" value="<?= $customer->Phone; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="RW" class="col-sm-2 col-form-label">CustomerOISID</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="CustomerOISID" placeholder="CustomerOISID" name="CustomerOISID" value="<?= $customer->CustomerOISID; ?>">
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Update</button>
            <!-- <button type="submit" class="btn btn-default float-right">Batal</button> -->
            <a href="<?= base_url('customer/index'); ?>" class="btn btn-warning">Batal</a>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->

</div>