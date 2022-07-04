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
            <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                <?= view('supplier/stepper') ?>

                <div class="d-flex align-items-center flex-column px-5">
                    <!-- <div class="col"> -->
                    <img src="<?= base_url("assets/images/check.png") ?>" alt="" height="100" />
                    <p class="fw-bolder fs-4 mt-5">
                        Kirim Data Perusahaan
                    </p>
                    <p>
                        Harap tinjai semua informasi yang anda ketik
                        sebelumnya di langkah sebelumnya, dan jika
                        semuanya baik-baik saja, kirimkan pesan anda
                        untuk menerima penawaran proyek dalam 24 - 48
                        jam.
                    </p>
                    <a href="<?= base_url("supplier/list") ?>" class="m-sm-3 m-3">
                        <button class="btn btn-danger tr-bg-primary px-4 py-2 rounded-pill">
                            Submit
                        </button>
                    </a>
                    <!-- </div> -->
                </div>
            </div>
            <div class="d-flex justify-content-between mt-sm-5 mt-4">
                <a href="<?= base_url("supplier/add/step_five") ?>">
                    <button class="btn btn-secondary shadow rounded-3 px-3 py-2">
                        Kembali
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>