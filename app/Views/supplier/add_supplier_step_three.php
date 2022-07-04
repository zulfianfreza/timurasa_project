<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container py-sm-5 py-3">
    <div class="row justify-content-center">
        <div class="col-xl-7">
            <div class="text-center col-sm-10 col-10 mx-auto">
                <p class="fw-bolder fs-2">
                    Form Request For Information
                </p>
                <p class="mt-3">
                    Silahkan isi formulir di bawah ini untuk menerima
                    penawaran proyek Anda. Jangan ragu untuk menambahkan
                    detail sebanyak yang diperlukan.
                </p>
            </div>
            <form action="<?= base_url('supplier/save/step_three') ?>" method="post">
                <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                    <?= view('supplier/stepper') ?>

                    <h5 class="fw-bolder">Bidang Usaha</h5>
                    <p>
                        Isi bidang usaha dan pilih satu atau beberapa
                        kategory bidang usaha anda.
                    </p>
                    <div class="mt-4">
                        <label class="form-label fw-bolder">Bidang Usaha</label>
                        <input type="text" class="form-control p-2 shadow-sm" placeholder="Bidang Usaha" name="bidang_usaha" value="<?= session()->get('bidang_usaha') == null ? '' : session()->get('bidang_usaha') ?>" />
                    </div>
                    <div class="mt-4">
                        <label class="form-label fw-bolder">Kategori</label>
                        <div class="row">
                            <?php foreach ($category as $category) :  ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="<?= $category['id'] ?>" id="<?= $category['name'] ?>" name="kategori[]" <?= session()->get('kategori') == null ? '' : (in_array($category['id'], session()->get('kategori')) ? 'checked' : '') ?> />
                                        <label class="form-check-label" for="<?= $category['name'] ?>">
                                            <?= $category['name'] ?>
                                        </label>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="form-label fw-bolder">Olahan lainnya</label>
                        <div class="row">
                            <?php foreach ($other as $other) :  ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="<?= $other['id'] ?>" id="<?= $other['name'] ?>" name="olahan_lainnya[]" <?= session()->get('olahan_lainnya') == null ? '' : (in_array($other['id'], session()->get('olahan_lainnya')) ? 'checked' : '') ?> />
                                        <label class="form-check-label" for="<?= $other['name'] ?>">
                                            <?= $other['name'] ?>
                                        </label>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-sm-5 mt-4">
                    <a href="<?= base_url("supplier/add/step_two") ?>">
                        <button class="btn btn-secondary shadow rounded-3 px-3 py-2">
                            Kembali
                        </button>
                    </a>
                    <!-- <a href="<?= base_url("supplier/add/step_for") ?>"> -->
                    <button type="submit" class="btn btn-danger tr-bg-primary shadow rounded-3 px-3 py-2">
                        Selanjutnya
                    </button>
                    <!-- </a> -->
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>