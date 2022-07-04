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
            <form action="<?= base_url('supplier/save/step_five') ?>" method="post" enctype="multipart/form-data">
                <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                    <?= view('supplier/stepper') ?>

                    <h5 class="fw-bolder">Data Pendukung</h5>
                    <p>
                        Tolong isi informasi dengan benar, agar team kami
                        dapat menghubungi anda.
                    </p>
                    <!-- <div class="mt-4">
                        <label class="form-label fw-bolder">Apakah sudak memiliki data
                            pendukung?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                                Sudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum
                            </label>
                        </div>
                    </div> -->
                    <div class="mt-4">
                        <label class="form-label fw-bolder">Upload company profile / portfolio
                            disini</label>
                        <!-- <div class="p-4 rounded-3 border border-light d-flex flex-column align-items-center">
                            <img src="<?= base_url("assets/images/upload.png") ?>" alt="" height="50" />
                        </div> -->
                        <input type="file" name="document" id="" class="form-control">
                    </div>
                    <div class="mt-4 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required />
                        <label class="form-check-label" for="exampleCheck1">
                            Saya sudah mengisi informasi secara jujur &
                            tidak merubah informasi pihak lain.
                        </label>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-sm-5 mt-4 ">
                    <a href="<?= base_url("supplier/add/step_for") ?>">
                        <button type="button" class="btn btn-secondary shadow rounded-3 px-3 py-2">
                            Kembali
                        </button>
                    </a>
                    <!-- <a href="<?= base_url("supplier/add/finish") ?>"> -->
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