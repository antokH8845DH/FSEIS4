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

<div class="hold-transition login-page">
    <!-- <center> -->
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>LOGIN</b>FSE INFORMATION SYSTEM</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in</p>
                <?= form_open('Auth/login'); ?>
                <!-- <form action="#" method="post"> -->
                <div class="input-group mb-3">
                    <input type="username" class="form-control" placeholder="username" name="username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- </form> -->
                <?= form_close(); ?>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- </center> -->
</div>