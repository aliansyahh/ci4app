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
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url(''); ?>/img/<?= $komik['sampul']; ?>" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><b>Penulis : </b> <?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : </b>
                                    <?= $komik['penerbit']; ?></small></p>
                            <a href="" class="btn btn-warning">edit</a>
                            <a href="" class="btn btn-danger">delete</a>
                            <br><br>
                            <a href="<?= base_url('/komik'); ?>" class="card-link">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>