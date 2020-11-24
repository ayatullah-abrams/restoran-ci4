<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<?php

if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 2;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="row">
    <div class="col-4">

        <a href="<?= base_url('/admin/kategori/create') ?>">
            <button class="btn" style="background-color:limegreen; color:cornsilk; margin-bottom: 10px; ">Tambah Data</button>
        </a>
    </div>
    <div class="col">
        <h4 style="margin-left: -100px;"> <b><?= $judul; ?></b></h4>
    </div>
</div>

<div class="card">
    <div class="row">
        <div class="col">
            <table class="table table-striped">

                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Keterangan</th>
                    <th></th>
                    <th></th>

                </tr>
                <?php $no ?>
                <?php foreach ($kategori as $key => $value) : ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?= $value['kategori'] ?>
                        </td>
                       
                        <td><a href="<?= base_url() ?>/admin/kategori/delete/<?= $value['idkategori'] ?>"><button class="btn btn-sm btn-danger">Delete<img style="margin-left: 10px;" src="<?= base_url('/icon/sampah.svg') ?>"></button></a></td>
                        <td><a href="<?= base_url() ?>/admin/kategori/find/<?= $value['idkategori'] ?>"><button class="btn btn-sm btn-info">Update<img style="margin-left: 10px;" src="<?= base_url('/icon/pensil.svg') ?>"></button></a></td>

                    </tr>

                <?php endforeach; ?>
            </table>
            <div style="margin-bottom: -16px;"><?= $pager->links('page', 'bootstrap') ?></div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>