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
                <form action="<?= base_url('/admin/menu/update') ?>" method="POST" enctype="multipart/form-data">

                    <h3> <b>UPDATE DATA </b></h3>

                    <div class="form-group">
                        <label for="harga">Kategori :</label>
                        <div class="col-6">
                            <select class="form-control" style="margin-left: -15px;" name="idkategori" id="idkategori">
                        </div>
                        <?php foreach ($kategori as $key => $value) : ?>
                            <option <?php if ($value['idkategori'] == $menu['idkategori']) echo "selected" ?> value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <input type="text" name="menu" value="<?= $menu['menu'] ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" value="<?= $menu['harga'] ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="harga">Gambar</label>
                        <input type="file" name="gambar" required class="form-control">
                    </div>
                    <input type="hidden" name="gambar" required class="form-control" value="<?= $menu['gambar'] ?>">
                    <input type="hidden" name="idmenu" required class="form-control" value="<?= $menu['idmenu'] ?>">
                    <div class="form-group">
                        <input class="btn btn-sm btn-primary" type="submit" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>