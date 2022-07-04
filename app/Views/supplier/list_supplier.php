<?= $this->extend('layout/template') ?>

<?= $this->section('styles') ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

<!-- DataTables with Button -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"> -->

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5 min-vh-100">
    <p class="fw-bolder fs-2">List Supplier</p>
    <div class="table-responsive">

        <table class="table table-bordered text-center align-middle" id="example">
            <thead class="tr-bg-primary text-white align-middle">
                <tr>
                    <th>No</th>
                    <th>Supplier</th>
                    <th>Lokasi</th>
                    <th>Kategori</th>
                    <th>Jenis Produk</th>
                    <th>Spek</th>
                    <th>Harga</th>
                    <th>Biaya Kirim</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Eka Rejeki</td>
                    <td>Jakarta</td>
                    <td>Bahan Pokok</td>
                    <td>Kayu Manis</td>
                    <td class="text-success">8 cm</td>
                    <td>Rp. 79.000/Kg</td>
                    <td>Rp. 12.000/Kg</td>
                    <td class="text-success">Terverifikasi</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CV Dempo Sejahtera</td>
                    <td>Depok</td>
                    <td>Bahan Pokok</td>
                    <td>Kayu Manis</td>
                    <td class="text-success">8 cm</td>
                    <td>Rp. 60.000/Kg</td>
                    <td>Rp. 12.000/Kg</td>
                    <td class="text-secondary">Belum Verifikasi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables with Button Export
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script> -->
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // dom: 'Bfrtip',
            // buttons: [
            //     'copyHtml5',
            //     'excelHtml5',
            //     'csvHtml5',
            //     'pdfHtml5'
            // ]
        });
    });
</script>

<?= $this->endSection() ?>