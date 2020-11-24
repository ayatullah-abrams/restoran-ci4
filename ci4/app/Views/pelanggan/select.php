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

    <div class="col">

        <h3><?= $judul; ?></h3>
    </div>
</div>


<div class="card" style="width: 800px;">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Alamat</th>
                    <th>Telfon</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>

                </tr>
                <?php $no ?>
                <?php foreach ($pelanggan as $key => $value) : ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?= $value['pelanggan'] ?>
                        </td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['telp'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><a href="<?= base_url() ?>/admin/pelanggan/delete/<?= $value['idpelanggan'] ?>"><button class="btn btn-sm btn-danger" style="width: 90px;">Delete<img style="margin-left: 10px;" src="<?= base_url('/icon/sampah.svg') ?>"></button></a></td>


                        <?php

                        if ($value['aktif'] == 1) {
                            $aktif = "AKTIF";
                        } else {
                            $aktif = "NONAKTIF";
                        }

                        ?>


                        <td><a href="<?= base_url() ?>/admin/pelanggan/update/<?= $value['idpelanggan'] ?>/<?= $value['aktif'] ?>"><button class="btn btn-sm btn-info" style="width: 120px;"><?= $aktif ?><img style="margin-left: 10px;" src="<?= base_url('/icon/unlock.svg') ?>"></button></a></td>


                    </tr>

                <?php endforeach; ?>
            </table>

            <div style="margin-bottom: -16px;"><?= $pager->links('page', 'bootstrap') ?></div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>