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
            <form action="<?= base_url('supplier/save/step_two') ?>" method="post">
                <div class="shadow mt-sm-5 mt-3 p-sm-5 p-3 bg-body rounded border border-light rounded-3">

                    <?= view('supplier/stepper') ?>

                    <h5 class="fw-bolder">Alamat Lengkap</h5>
                    <p>
                        Tolong isi informasi dengan benar, agar team kami
                        dapat menghubungi anda.
                    </p>
                    <div class="row mb-4">
                        <div class="col-sm">
                            <label class="form-label fw-bolder">Alamat Perusahaan</label>
                            <input type="text" class="form-control p-2 shadow-sm" placeholder="Alamat Lengkap" name="alamat" value="<?= session()->get('alamat') == null ? '' : session()->get('alamat') ?>" />
                        </div>
                        <div class="col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="form-select p-2 shadow-sm" aria-label="Default select" onchange="val(this)" required>
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
                            <select name="kota" id="kota" class="form-select p-2 shadow-sm" aria-label="Default select" required>
                                <option value="" selected>Kota</option>
                            </select>
                        </div>
                        <div class=" col-sm mt-sm-0 mt-4">
                            <label class="form-label fw-bolder">Kode Pos</label>
                            <input type="number" class="form-control p-2 shadow-sm" placeholder="Zip" name="kode_pos" value="<?= session()->get('kode_pos') == null ? '' : session()->get('kode_pos') ?>" />
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-sm-5 mt-4">
                    <a href="<?= base_url("supplier/add/") ?>">
                        <button type="button" class="btn btn-secondary shadow rounded-3 px-3 py-2">
                            Kembali
                        </button>
                    </a>
                    <!-- <a href="<?= base_url("supplier/add/step_three") ?>"> -->
                    <button type="submit" class="btn btn-danger tr-bg-primary shadow rounded-3 px-3 py-2">
                        Selanjutnya
                    </button>
                    <!-- </a> -->
                </div>
            </form>
        </div>
    </div>
</div>

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