<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#"><?= $title; ?></a></div>
                <div class="breadcrumb-item"><a href="#"><?= $judul; ?></a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="col-14 col-md-14 col-lg-14">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data Komik</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('/Komik/save'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" autofocus
                                        class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>"
                                        id="judul" name="judul" value="<?= old('judul'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="penulis" name="penulis"
                                        value="<?= old('penulis'); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="penerbit" name="penerbit"
                                        value="<?= old('penerbit'); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sampul" name="sampul"
                                        value="<?= old('sampul'); ?>">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Tambah-Data</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection(); ?>