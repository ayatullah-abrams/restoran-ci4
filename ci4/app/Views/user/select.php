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

        <a href="<?= base_url('/admin/user/create') ?>">
            <button class="btn" style="background-color:limegreen; color:cornsilk; margin-bottom: 10px;">Tambah Data</button>
        </a>
    </div>
    <div class="col">
        <h3 style="margin-left: -100px;"><?= $judul; ?></h3>
    </div>
</div>


<div class="card">
    <div class="row">
        <div class="col">
            <table class="table table-striped">

                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                <?php $no ?>
                <?php foreach ($user as $key => $value) : ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?= $value['user'] ?>
                        </td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['level'] ?></td>

                        <?php if ($value['aktif'] == 1) $aktif = "AKTIF";
                        else $aktif = "BANNED"; ?>

                        <td><a href="<?= base_url() ?>/admin/user/update/<?= $value['iduser'] ?>/<?= $value['aktif'] ?>"><button class="btn btn-sm btn-info" style="width: 120px;"><?= $aktif ?><img style="margin-left: 10px;" src="<?= base_url('/icon/unlock.svg') ?>"></button></a></td>

                        <td><a href="<?= base_url() ?>/admin/user/delete/<?= $value['iduser'] ?>"><button class="btn btn-sm btn-danger">Delete<img style="margin-left: 10px;" src="<?= base_url('/icon/sampah.svg') ?>"></button></a></td>
                        <td><a href="<?= base_url() ?>/admin/user/find/<?= $value['iduser'] ?>"><button class="btn btn-sm btn-primary">Update<img style="margin-left: 10px;" src="<?= base_url('/icon/pensil.svg') ?>"></button></a></td>

                    </tr>

                <?php endforeach; ?>
            </table>

            <div style="margin-bottom: -16px;"><?= $pager->links('page', 'bootstrap') ?></div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>