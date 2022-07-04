<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container py-sm-5 py-3">
    <div class="row justify-content-center">
        <div class="col-sm-7">
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
            <form action="<?= base_url('supplier/save/step_one') ?>" method="post">
                <?= csrf_field() ?>
                <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                    <?= view('supplier/stepper') ?>

                    <h5 class="fw-bolder">Informasi Kontak</h5>
                    <p>
                        Tolong isi informasi dengan benar, agar team kami
                        dapat menghubungi anda.
                    </p>
                    <div class="row mb-4">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Nama</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Nama" name="nama" value="<?= session()->get('nama') == null ? '' : session()->get('nama') ?>" />
                        </div>
                        <div class="col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Email</label>
                            <input type="email" class="form-control p-2 shadow-sm" placeholder="Email address" name="email" value="<?= session()->get('email') == null ? '' : session()->get('email') ?>" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Nomor Telepon</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="(+62) 456 - 7890" name="no_telp" value="<?= session()->get('no_telp') == null ? '' : session()->get('no_telp') ?>" />
                        </div>
                        <div class="col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Perusahaan</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Company Name" name="nama_perusahaan" value="<?= session()->get('nama_perusahaan') == null ? '' : session()->get('nama_perusahaan') ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Website Perusahaan
                                <span class="tr-text-primary shadow-sm">*</span></label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="www.timurasa.com" name="website_perusahaan" value="<?= session()->get('website_perusahaan') == null ? '' : session()->get('website_perusahaan') ?>" />
                            <div class="form-text tr-text-primary">
                                *Opsional jika ada.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-sm-5 mt-4">
                    <!-- <a href="<?= base_url("supplier/add/step_two") ?>"> -->
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