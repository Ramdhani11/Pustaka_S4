<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <title><?= $judul; ?></title>
</head>

<body>
    <div class="container-lg bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Pustaka</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('Beranda') ?>">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <?php if (!empty($this->session->userdata('email'))) { ?>
                            <li class="nav-item">
                                <a href="<?= base_url('member/profil') ?>" class="nav-link">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('booking') ?>" class="nav-link">Booking</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('member/logout') ?>" class="nav-link">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="<?= base_url('auth') ?>" class="nav-link">Login</a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"> Selamat Datang <b><?= $user; ?></b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>