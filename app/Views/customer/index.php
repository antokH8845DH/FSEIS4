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
                    <h1>GVP CUSTOMER</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card card-info">
        <div class="card-header">
            <h2 class="card-title"></h2>
            <h3>Active Customer </h3>
            <!-- <div class="row">

                <div class="col-8">

                </div>
                <div class="col-4">
                    <form action="searchCustomer" method="POST">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" name="search">
                            <span class="input-group-append">
                                <button type="input" class="btn btn-info btn-flat">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">

                </div>
                <div class="col-sm-4">


                </div>
            </div> -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example3" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Customer</th>
                        <th style="text-align: center;">Address</th>
                        <th style="text-align: center;">Customer<br>OISID</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //print_r($customers); 
                    ?>
                    <?php foreach ($customers as $index => $customer) : ?>
                        <tr>
                            <td style="text-align: center;"><?= ($index + 1); ?></td>
                            <td><?= $customer->Customer; ?> </td>
                            <td><?= $customer->Address . ' , ' . $customer->City . '<br> ' . $customer->Province; ?> </td>
                            <td style="text-align: center;"><?= $customer->CustomerOISID; ?></td>
                            <td style="text-align: center;">
                                <a href="<?= site_url('customer/detail/' . $customer->No); ?>" class="btn btn-primary btn-sm">view</a>
                                <a href="<?= site_url('customer/update/' . $customer->No); ?>" class="btn btn-info btn-sm">Edit</a>

                            </td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <!-- modal edit -->
        <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">EDIT CUSTOMER</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="updateCustomer" method="POST">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">ID Customer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control id" name="id" placeholder="id" name="No" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Customer</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control customer" placeholder="customer" name="Customer">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control address" placeholder="address" name="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control city" placeholder="city" name="City">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Province</label>
                                <div class="col-sm-8">
                                    <select name="Province" class="form-control province" placeholder="province">
                                        <option value="<?= $customer->Province; ?>"><?= $customer->Province; ?></option>
                                        <?php foreach ($province as $row) : ?>
                                            <option value="<?= $row['province']; ?>"><?= $row['province']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control phone" placeholder="phone" name="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">CustomerOISID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control customerOISID" placeholder="customerOISID" name="CustomerOISID">
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
    <!-- /.card -->