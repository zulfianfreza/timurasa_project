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
                        <a class="nav-link <?= $active_nav == 'list' ? "btn btn-danger py-2 px-3 rounded-pill text-white" : "text-black" ?>" href="<?= base_url('supplier/list') ?>">List Supplier</a>
                    </li>
                    <li class="nav-item mx-sm-4">
                        <a class="nav-link <?= $active_nav == 'add' ? "btn btn-danger py-2 px-3 rounded-pill text-white" : "text-black" ?>" href="<?= base_url('supplier/add') ?>">Daftar Supplier</a>
                        <!-- <button type="button" class="btn btn-danger py-2 px-3 rounded-pill">
                            Daftar Supplier
                        </button> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>