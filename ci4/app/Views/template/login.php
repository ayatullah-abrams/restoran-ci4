<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">

    <title>Login Page</title>
</head>

<body>

    <div class="container">

        <div class="row mt-5">
            <div class="col-6 mx-auto">

                <div class="col">
                    <?php

                    if (!empty($info)) {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $info;
                        echo '</div>';
                    }


                    ?>
                </div>

                   <div style="margin-left: 170px; margin-right: 150px; "><h2>Login Admin</h2></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('/admin/login') ?>" method="POST">
                                    <div class="form-group">
                                        <label for="kategori">Email : </label>
                                        <input type="email" name="email" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Password : </label>
                                        <input type="password" name="password" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-sm btn-primary" name="simpan" value="LOGIN">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</body>

</html>