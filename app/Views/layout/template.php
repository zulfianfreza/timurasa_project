<!DOCTYPE html>
<html lang="en">

<head>
    <title>TIMURASA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>" />
    <link rel="shortcut icon" href="<?= base_url("assets/images/logo.png") ?>">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <?= $this->renderSection('styles') ?>

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white py-sm-4 shadow-sm">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?= base_url("assets/images/logo.png") ?>" alt="" height="75" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-sm-4">
                        <a class="nav-link text-black" href="javascript:void(0)">Home</a>
                    </li>
                    <li class="nav-item mx-sm-4">
                        <a class="nav-link <?= $active_nav == 'list' ? "btn tr-bg-primary py-2 px-3 rounded-pill text-white" : "text-black" ?>" href="<?= base_url('supplier/list') ?>">List Supplier</a>
                    </li>
                    <li class="nav-item mx-sm-4">
                        <a class="nav-link <?= $active_nav == 'add' ? "btn tr-bg-primary py-2 px-3 rounded-pill text-white" : "text-black" ?>" href="<?= base_url('supplier/add') ?>">Daftar Supplier</a>
                        <!-- <button type="button" class="btn btn-danger py-2 px-3 rounded-pill">
                            Daftar Supplier
                        </button> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <div class="w-100 py-sm-5 py-3 tr-bg-primary text-white">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto me-auto">
                    <p class="fs-6 fw-bold">PT. ASA ANTARA NUSA</p>
                    <p>Accelerice Indonesia
                        <br>3rd Floor | Jl. H.R. Rasuna Said No. 5
                        <br>(Ariobimo Sentral Area) - Kuningan Timur
                        <br>Jakarta Selatan 12950
                    </p>
                </div>
                <div class="col-auto">
                    <a href="https://www.facebook.com/Timurasa-Indonesia-198085200714368" class="text-decoration-none" target="_blank">
                        <i class="fab fa-facebook text-white fs-2 mx-2"></i>
                    </a>
                    <a href="https://www.instagram.com/timurasaindonesia/" class="text-decoration-none" target="_blank">
                        <i class="fab fa-instagram text-white fs-2 mx-2"></i>
                    </a>
                    <a href="https://twitter.com/timurasaid" class="text-decoration-none" target="_blank">
                        <i class="fab fa-twitter text-white fs-2 mx-2"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCemXKvPaH-BCzzkHlpijd7Q" class="text-decoration-none" target="_blank">
                        <i class="fab fa-youtube text-white fs-2 mx-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('scripts') ?>

</body>

</html>