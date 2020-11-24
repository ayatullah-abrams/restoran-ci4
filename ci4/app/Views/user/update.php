<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php

    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key . "->" . $value;
            echo "</br>";
        }
        echo '</div>';
    }


    ?>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('/admin/user/ubah') ?>" method="POST">
                    <h3><b><?= $judul ?></b></h3>
                    <div class="form-group">
                        <input type="hidden" value="<?= $user['iduser'] ?>" name="iduser" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Email</label>
                        <input type="email" value="<?= $user['email'] ?>" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-sm btn-info" type="submit" name="simpan" value="SIMPAN">
                    </div>

                    <div class="form-group">
                        <label for="harga">Level</label>
                        <div class="col-6">
                            <select class="form-control" style="margin-left: -15px ;" name="level" id="idkategori">
                        </div>
                        <?php foreach ($level as $key) : ?>
                            <option <?php if ($user['level'] == $key) {
                                        echo "selected";
                                    } ?> value="<?= $key ?>"><?= $key ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>