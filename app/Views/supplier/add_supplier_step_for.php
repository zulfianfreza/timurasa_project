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
            <form action="<?= base_url('supplier/save/step_for') ?>" method="post">
                <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                    <?= view('supplier/stepper') ?>

                    <h5 class="fw-bolder">Identitas Produk</h5>
                    <p>
                        Tolong isi informasi dengan benar, agar team kami
                        dapat menghubungi anda.
                    </p>
                    <div class="row mb-4">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Nama Produk</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Nama Produk" name="nama_produk" value="<?= session()->get('nama_produk') == null ? '' : session()->get('nama_produk') ?>" />
                        </div>
                        <div class="col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Jenis Produk</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Jenis Produk" name="jenis_produk" value="<?= session()->get('jenis_produk') == null ? '' : session()->get('jenis_produk') ?>" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Kualitas Produk</label>
                            <select name="kualitas" id="" class="form-select p-2 shadow-sm">
                                <option selected disabled>Kualitas Produk</option>
                                <option value="super" <?= session()->get('kualitas') == null ? '' : (session()->get('kualitas') == 'super' ? 'selected' : '') ?>>Super</option>
                                <option value="bagus" <?= session()->get('kualitas') == null ? '' : (session()->get('kualitas') == 'bagus' ? 'selected' : '') ?>>Bagus</option>
                            </select>
                        </div>
                        <div class="col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Harga</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Harga" name="harga" value="<?= session()->get('harga') == null ? '' : session()->get('harga') ?>" />
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Kuantitas</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Kuantitas" name="kuantitas" value="<?= session()->get('kuantitas') == null ? '' : session()->get('kuantitas') ?>" />
                        </div>
                        <div class="col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Termin Pembayaran</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Termin Pembayaran" name="termin" value="<?= session()->get('termin') == null ? '' : session()->get('termin') ?>" />
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-sm-5 mt-4">
                    <a href="<?= base_url("supplier/add/step_three") ?>">
                        <button type="button" class="btn btn-secondary shadow rounded-3 px-3 py-2">
                            Kembali
                        </button>
                    </a>
                    <!-- <a href="<?= base_url("supplier/add/step_five") ?>"> -->
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