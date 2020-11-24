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
                <form action="<?= base_url('/admin/kategori/insert') ?>" method="POST">
                    <h4 style="color:dark;"> <b>TAMBAH DATA</b></h4>
                    <div class="form-group">
                        <label for="kategori">kategori :</label>
                        <input type="text" name="kategori" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">keterangan :</label>
                        <input type="text" name="keterangan" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-sm btn-info" type="submit" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col">

</div>

<div class="col-6">

</div>

<?= $this->endSection() ?>