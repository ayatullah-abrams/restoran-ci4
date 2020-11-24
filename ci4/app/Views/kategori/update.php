<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php

    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }


    ?>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url() ?>/admin/kategori/update" method="POST">
                    <h3> <b> UPDATE DATA </b> </h3>
                    <div class="form-group">
                        <label for="kategori">kategori</label>
                        <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">keterangan</label>
                        <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">
                    </div>
                    <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>">
                    <div class="form-group">
                        <input class="btn btn-sm btn-info" type="submit" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>