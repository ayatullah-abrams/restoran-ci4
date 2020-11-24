<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">

    <title>View Layout</title>
</head>

<body>

    <div class="container">
        <div class="row mt-2">
            <div class="col">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?= base_url('/admin') ?>">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <li class="nav-item" style="margin-top: 8px; margin-left: 350px;">
                                <img src="../icon/user.svg" style="margin-bottom:2px;">
                                User : </li>
                            <li class="nav-item" style="margin-left:0px;">
                                <a class="nav-link" href="#"> <?php
                                                                if (!empty(session()->get('user'))) {
                                                                    echo session()->get('user');
                                                                }
                                                                ?> <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item" style="margin-top: 8px; margin-left: 20px;">
                                <img src="../icon/mail.svg" style="margin-bottom:2px;">
                                Email : </li>
                            <li class="nav-item" style="margin-top: 8px; margin-left: 5px;">
                                <?php
                                if (!empty(session()->get('email'))) {
                                    echo session()->get('email');
                                }
                                ?>
                            </li>

                            <li class="nav-item" style="margin-top: 8px; margin-left: 20px;">
                                <img src="../icon/level.svg" style="margin-bottom:2px;">
                                Level : </li>
                            <li class="nav-item" style="margin-top: 8px; margin-left: 5px;">
                                <?php
                                if (!empty(session()->get('level'))) {
                                    echo session()->get('level');
                                    $level = session()->get('level');
                                }
                                ?>
                            </li>

                            <li class="nav-item" style="margin-top: 8px; margin-left: 20px;"></li>
                            <li class="nav-item" style="margin-top: 5px; margin-left: 5px;">
                                <a href="<?= base_url('admin/login/logout') ?>" class="btn btn-sm btn-danger">Logout</a>
                            </li>
                            </li>

                        </div>
                    </div>
                </nav>

                <div style="margin-bottom: 20px;"></div>
            </div>
        </div>


        <div class="row mt-2">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <?php if ($level === "admin") : ?>
                            <li class="list-group-item list-group-item-action active" style="color:black;"> <b> RESTORAN CI-4 </b> </li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/menu') ?>">Menu</a></li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/pelanggan') ?>">Pelanggan</a></li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/order') ?>">Order</a></li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/user') ?>">User</a></li>

                        <?php endif; ?>

                        <?php if ($level === "kasir") : ?>

                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/order') ?>">Order</a></li>
                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>

                        <?php endif; ?>

                        <?php if ($level === "koki") : ?>

                            <li class="list-group-item list-group-item-action"> <a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>

                        <?php endif; ?>

                    </ul>
                </div>
            </div>
            <div class="col-8 px-2">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
</body>

</html>