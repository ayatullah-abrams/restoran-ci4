<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col">
        <h3><?= $judul ?></h3>
    </div>
</div>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 2;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}

?>

<div class="card">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>ID Order</th>
                    <th>Pelanggan</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Bayar</th>
                    <th>Kembali</th>
                    <th>Status</th>

                </tr>
                <?php foreach ($order as $value) : ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?= $value['idorder'] ?>
                        </td>
                        <td><?= $value['pelanggan'] ?></td>
                        <td><?= $value['tglorder'] ?></td>
                        <td><?= $value['total'] ?></td>
                        <td><?= $value['bayar'] ?></td>
                        <td><?= $value['kembali'] ?></td>
                        <?php
                        if ($value['status'] == 1) {
                            $status = "<a href='#' class='btn btn-sm btn-success'>LUNAS</a>";
                        } else {
                            $status = "<a href='" . base_url("/admin/order/find") . "/" . $value['idorder'] . "' class='btn btn-sm btn-warning'>BAYAR</a>";
                        }
                        ?>
                        <td><?= $status ?></td>


                    </tr>

                <?php endforeach; ?>
            </table>

            <div style="margin-bottom: -16px;"><?= $pager->makeLinks(1, $perPage, $total, 'bootstrap')  ?></div>

        </div>
    </div>
</div>



<?= $this->endSection() ?>