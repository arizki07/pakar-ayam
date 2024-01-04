<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Data Penyakit</h1>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Relasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('admin/relasi/update/' . $relation['id_relasi']) ?>" method="post" id="edit-relasi" name="edit-relasi">

                            <div class="form-group">
                                <label for="kode_penyakit">Pilih Kode Penyakit</label>
                                <select class="form-control" name="kode_penyakit" required>
                                    <option selected disabled>Pilih Kode Penyakit</option>
                                    <?php foreach ($penyakit as $pnykt) : ?>
                                        <option value="<?= $pnykt['id_penyakit'] ?>" <?= ($relation['id_penyakit'] == $pnykt['id_penyakit']) ? 'selected' : ''; ?>>
                                            <?= $pnykt['kode_penyakit'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kode_gejala">Pilih Gejala</label>
                                <select class="form-control" name="kode_gejala" required>
                                    <option selected disabled>Pilih Kode Gejala</option>
                                    <?php foreach ($gejala as $gjl) : ?>
                                        <option value="<?= $gjl['id_gejala'] ?>" <?= ($relation['id_gejala'] == $gjl['id_gejala']) ? 'selected' : ''; ?>>
                                            <?= $gjl['kode_gejala'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mb">Pilih Nilai MB</label>
                                <select name="mb" class="form-control" required>
                                    <option selected>Pilih Nilai MB</option>
                                    <?php foreach ($mbOptions as $option) : ?>
                                        <option value="<?= $option ?>" <?= ($relation['mb'] == $option) ? 'selected' : ''; ?>>
                                            <?= $option ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <!-- Tambahkan opsi nilai MB sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="md">Pilih Nilai MD</label>
                                <select name="md" class="form-control" required>
                                    <option selected>Pilih Nilai MD</option>
                                    <?php foreach ($mdOptions as $option) : ?>
                                        <option value="<?= $option ?>" <?= ($relation['md'] == $option) ? 'selected' : ''; ?>>
                                            <?= $option ?>
                                        </option>
                                    <?php endforeach; ?>

                                    <!-- Tambahkan opsi nilai MD sesuai kebutuhan -->
                                </select>
                            </div>

                            <div class="card-footer">
                                <button type="submit" href="" class="btn btn-warning">Save</button>
                                <a href="<?= site_url('admin/relasi') ?>" class="btn btn-default float-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>