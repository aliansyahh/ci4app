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

        <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>

        <div class="section-body">
            <!-- <h2 class="section-title">Tables</h2>
            <p class="section-lead">
                Examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.
            </p> -->
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="<?= base_url('/komik/create'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Sampul</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($komik as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><img class="m-2" src="img/<?= $k['sampul']; ?>" alt="" width="60">
                                        </td>
                                        <td><?= $k['judul']; ?></td>
                                        <td>
                                            <a href="<?= base_url('/komik') ?>/<?= $k['slug']; ?>"
                                                class="btn btn-primary btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>