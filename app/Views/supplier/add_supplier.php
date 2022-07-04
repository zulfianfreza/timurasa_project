<?= $this->extend('layout/template') ?>

<?= $this->section('styles') ?>
<style>
    .tab-step {
        display: none;
    }
</style>
<?= $this->endSection() ?>

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
            <form action="<?= base_url('supplier/saveSupplier') ?>" method="post" enctype="multipart/form-data" id="supplierForm">
                <?= csrf_field() ?>
                <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                    <div class="px-5 py-3 mb-sm-5 mb-5 ">
                        <div class="position-relative m-4">
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-secondary" id="progressBar" role="progressbar" style="width: 0%;" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="step-indicator position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill btn-light" style="width: 2.5rem; height:2.5rem; left:0%;">
                                1
                            </button>
                            <button type="button" class="step-indicator position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill btn-light" style="width: 2.5rem; height:2.5rem; left:25%;">
                                2
                            </button>
                            <button type="button" class="step-indicator position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill btn-light" style="width: 2.5rem; height:2.5rem; left:50%;">
                                3
                            </button>
                            <button type="button" class="step-indicator position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill btn-light" style="width: 2.5rem; height:2.5rem; left:75%;">
                                4
                            </button>
                            <button type="button" class="step-indicator position-absolute top-0 translate-middle btn btn-sm border-0 rounded-pill btn-light" style="width: 2.5rem; height:2.5rem; left:100%;">
                                5
                            </button>
                        </div>
                    </div>

                    <div class="tab-step">

                        <h5 class="fw-bolder">Informasi Kontak</h5>
                        <p>
                            Tolong isi informasi dengan benar, agar team kami
                            dapat menghubungi anda.
                        </p>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Nama</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Nama" name="nama" />
                            </div>
                            <div class="col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Email</label>
                                <input type="email" class="form-control p-2 shadow-sm input-required" placeholder="Email address" name="email" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Nomor Telepon</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="(+62) 456 - 7890" name="no_telp" />
                            </div>
                            <div class="col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Perusahaan</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Company Name" name="perusahaan" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Website Perusahaan
                                    <span class="tr-text-primary shadow-sm">*</span></label>
                                <input type="text" class="form-control p-2 shadow-sm" placeholder="www.timurasa.com" name="website_perusahaan" />
                                <div class="form-text tr-text-primary">
                                    *Opsional jika ada.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-step">
                        <h5 class="fw-bolder">Alamat Lengkap</h5>
                        <p>
                            Tolong isi informasi dengan benar, agar team kami
                            dapat menghubungi anda.
                        </p>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Alamat Perusahaan</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Alamat Lengkap" name="alamat" />
                            </div>
                            <div class="col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Provinsi</label>
                                <select name="provinsi" id="provinsi" class="form-select p-2 shadow-sm input-required" aria-label="Default select" onchange="val(this)" required>
                                    <option value="" selected>Provinsi</option>
                                    <?php foreach ($provinsi as $prov) : ?>
                                        <option value="<?= $prov['nama'] ?>" provId="<?= $prov['id'] ?>"><?= $prov['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Kota</label>
                                <select name="kota" id="kota" class="form-select p-2 shadow-sm input-required" aria-label="Default select" required>
                                    <option value="" selected>Kota</option>
                                </select>
                            </div>
                            <div class=" col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Kode Pos</label>
                                <input type="number" class="form-control p-2 shadow-sm input-required" placeholder="Zip" name="kode_pos" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-step">
                        <h5 class="fw-bolder">Bidang Usaha</h5>
                        <p>
                            Isi bidang usaha dan pilih satu atau beberapa
                            kategory bidang usaha anda.
                        </p>
                        <div class="mt-4">
                            <label class="form-label fw-bolder">Bidang Usaha</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Bidang Usaha" name="bidang_usaha" />
                        </div>
                        <div class="mt-4">
                            <label class="form-label fw-bolder">Kategori</label>
                            <div class="row">
                                <?php foreach ($category as $category) :  ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="<?= $category['id'] ?>" id="<?= $category['name'] ?>" name="kategori[]" />
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
                                            <input class="form-check-input" type="checkbox" value="<?= $other['id'] ?>" id="<?= $other['name'] ?>" name="olahan_lainnya[]" />
                                            <label class="form-check-label" for="<?= $other['name'] ?>">
                                                <?= $other['name'] ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-step">
                        <h5 class="fw-bolder">Identitas Produk</h5>
                        <p>
                            Tolong isi informasi dengan benar, agar team kami
                            dapat menghubungi anda.
                        </p>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Nama Produk</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Nama Produk" name="nama_produk" />
                            </div>
                            <div class="col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Jenis Produk</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Jenis Produk" name="jenis_produk" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Kualitas Produk</label>
                                <select name="kualitas" id="" class="form-select p-2 shadow-sm input-required">
                                    <option selected disabled value=''>Kualitas Produk</option>
                                    <option value="super">Super</option>
                                    <option value="bagus">Bagus</option>
                                </select>
                            </div>
                            <div class="col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Harga</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Harga" name="harga" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm">
                                <label class="form-label fw-bolder">Kuantitas</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Kuantitas" name="kuantitas" />
                            </div>
                            <div class="col-sm mt-sm-0 mt-4">
                                <label class="form-label fw-bolder">Termin Pembayaran</label>
                                <input type="text" class="form-control p-2 shadow-sm input-required" placeholder="Termin Pembayaran" name="termin" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-step">
                        <h5 class="fw-bolder">Data Pendukung</h5>
                        <p>
                            Tolong isi informasi dengan benar, agar team kami
                            dapat menghubungi anda.
                        </p>
                        <div class="mt-4">
                            <label class="form-label fw-bolder">Upload company profile / portfolio
                                disini</label>
                            <!-- <div class="p-4 rounded-3 border border-light d-flex flex-column align-items-center">
                            <img src="<?= base_url("assets/images/upload.png") ?>" alt="" height="50" />
                        </div> -->
                            <input type="file" name="document" id="" class="form-control p-2 shadow-sm input-required">
                        </div>
                        <div class="mt-4 form-check">
                            <input type="checkbox" class="form-check-input check-required" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">
                                Saya sudah mengisi informasi secara jujur &
                                tidak merubah informasi pihak lain.
                            </label>
                            <!-- <div id="invalidCheck3Feedback" class="invalid-feedback">
                                You must agree before submitting.
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-step">
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
                </div>
                <div class="d-flex button-container mt-sm-5 mt-4" id="buttonContainer">
                    <button type="button" class="btn btn-secondary shadow rounded-3 px-3 py-2" id="prevButton" onclick="nextPrev(-1)">
                        Kembali
                    </button>
                    <button type="button" class="btn btn-danger tr-bg-primary shadow rounded-3 px-3 py-2" id="nextButton" onclick="nextPrev(1)">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<script type="text/javascript">
    window.addEventListener('keydown', function(e) {
        if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
            if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
                e.preventDefault();
                return false;
            }
        }
    }, true);
</script>

<script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        var x = document.getElementsByClassName('tab-step');

        x[n].style.display = 'block';

        if (n == 0) {
            document.getElementById('prevButton').style.display = 'none';
            document.getElementById('nextButton').style.display = 'block';
            var buttonContainer = document.getElementById('buttonContainer');
            buttonContainer.classList.remove('justify-content-between')
            buttonContainer.classList.add('justify-content-end')
        } else {
            document.getElementById('prevButton').style.display = 'block';
            document.getElementById('nextButton').style.display = 'block';
            var buttonContainer = document.getElementById('buttonContainer');
            buttonContainer.classList.remove('justify-content-end')
            buttonContainer.classList.add('justify-content-between')
        }

        if (n == (x.length - 1)) {
            document.getElementById('nextButton').style.display = 'none';
        }
        fixStepIndicator(n);
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName('tab-step');

        if (n == 1 && !validateForm()) return false;

        x[currentTab].style.display = 'none';


        currentTab = currentTab + n;


        if (currentTab >= x.length) {
            document.getElementById('supplierForm').submit();
            return false;
        }

        showTab(currentTab);
    }

    function validateForm() {
        var x, y, z, i, valid = true;
        x = document.getElementsByClassName('tab-step');
        y = x[currentTab].getElementsByClassName('input-required');
        z = document.getElementsByClassName('check-required');
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].classList.add('is-invalid')
                valid = false;
            } else {
                y[i].classList.remove('is-invalid')

            }
        }

        c = document.getElementById('exampleCheck1');
        if (currentTab == 4) {
            if (!c.checked) {
                valid = false;
                c.classList.add('is-invalid')
            } else {
                c.classList.remove('is-invalid')

            }
        }

        if (valid) {

            var z = document.getElementsByClassName("step-indicator")[currentTab];
            z.className = z.className.replace(" btn-light", " btn-secondary");
        }

        return valid;
    }

    function fixStepIndicator(n) {

        var w;

        if (n == 0) {
            w = '0%'
        } else if (n == 1) {
            w = '25%'
        } else if (n == 2) {
            w = '50%'
        } else if (n == 3) {
            w = '75%'
        } else {
            w = '100%'
        }
        var x = document.getElementById('progressBar');
        x.style.width = w;

        var y = document.getElementsByClassName('step-indicator');
        for (var i = 0; i < y.length; i++) {
            y[i].className = y[i].className.replace(' text-white tr-bg-primary', '');
        }

        if (n < 5) {
            y[n].className += ' text-white tr-bg-primary';
        }
    }
</script>

<script>
    async function val(sel) {
        // d = document.getElementById("provinsi").value;
        d = sel.options[sel.selectedIndex].getAttribute('provId');
        const url = 'http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + d;
        const data = await getApi(url);
        document.getElementById('kota').innerHTML = "";
        for (let kota of data['kota_kabupaten']) {
            var x = document.getElementById('kota');
            var option = new Option(kota['nama'], kota['nama']);
            x.appendChild(option);
        }
    }
    async function getApi(url) {
        const response = await fetch(url);
        var data = await response.json();

        return data;
    }
</script>

<?= $this->endSection() ?>