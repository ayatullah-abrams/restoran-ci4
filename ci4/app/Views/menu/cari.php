<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 2;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="row">
    <div class="col-4">

        <a href="<?= base_url('/admin/menu/create') ?>">
            <button class="btn btn-sm btn-primary">Tambah Data</button>
        </a>
    </div>
    <div class="col">

        <h3><?= $judul; ?></h3>
    </div>
</div>

<div class="row mt-1">
    <div class="col-4">
        <form action="<?= base_url('/admin/menu/read') ?>" method="get">
            <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
        </form>
    </div>
</div>


<div class="row mt-2">
    <div class="col">
        <table class="table">

            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Foto</th>
                <th>Harga</th>
                <th></th>
                <th></th>

            </tr>
            <?php $no ?>
            <?php foreach ($menu as $key => $value) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $value['menu'] ?>
                    </td>
                    <td><img style="width: 70px;" src="<?= base_url('/upload/' . $value['gambar'] . ''); ?>" alt=""></td>
                    <td><?= number_format($value['harga'])  ?></td>
                    <td><a href="<?= base_url() ?>/admin/menu/delete/<?= $value['idmenu'] ?>"><button class="btn btn-sm btn-danger">Delete<img style="margin-left: 10px;" src="<?= base_url('/icon/sampah.svg') ?>"></button></a></td>
                    <td><a href="<?= base_url() ?>/admin/menu/find/<?= $value['idmenu'] ?>"><button class="btn btn-sm btn-primary">Update<img style="margin-left: 10px;" src="<?= base_url('/icon/pensil.svg') ?>"></button></a></td>

                </tr>

            <?php endforeach; ?>
        </table>

        <?= $pager->makeLinks(1, $tampil, $total, 'bootstrap') ?>
    </div>
</div>

<?= $this->endSection() ?>