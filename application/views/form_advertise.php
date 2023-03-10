<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simple app</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css" />
    <style>
        body {
            font-family: 'Poppins';
            background-color: #ffeded;
        }

        .text-small {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-4">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="<?= base_url() . 'index.php/loker_controller/index' ?>">Lowongan Kerja</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pasang Lowongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="m-2 mt-5">
        <div class="text-start text-white p-5 bg-primary" style="min-height:auto">
            <div class="fs-3">📃 Loker Solo</div>
            <div class="fs-1 fw-bold">Pasang Lowongan</div>
        </div>
    </div>

    <div class="container bg-white mt-5 p-4 text-secondary">
        <div class="fs-3 fw-bold border-bottom pb-2 mb-4">Form Pengajuan</div>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jabatan Pekerjaan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status Pekerjaan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pendidikan Pekerjaan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Profesi Pekerjaan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Pengalaman Pekerjaan</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Besaran Gaji</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pekerjaan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Batas Lamaran</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <button class="btn btn-primary" type="submit">Selanjutnya</button>
            <button class="btn btn-danger" type="cancel">Batalkan</button>
        </form>
    </div>
    <div class="bg-white mt-5 p-4 pb-32 rounded-lg shadow">
        <div class="d-flex justify-content-center">
            <a href="<?= base_url() . 'index.php/loker_controller/about' ?>" class="m-3 text-decoration-none text-secondary">Tentang Kami</a>
            <a href="<?= base_url() . 'index.php/loker_controller/contact' ?>" class="m-3 text-decoration-none text-secondary">Kontak</a>
            <a href="<?= base_url() . 'index.php/loker_controller/policy' ?>" class="m-3 text-decoration-none text-secondary">Kebijakan Beriklan </a>
            <a href="<?= base_url() . 'index.php/loker_controller/help' ?>" class="m-3 text-decoration-none text-secondary">Pusat Bantuan</a>
            <a href="<?= base_url() . 'index.php/loker_controller/post' ?>" class="m-3 text-decoration-none text-secondary">Pasang Lowongan</a>
        </div>
        <div class="d-flex mb-3 px-5 text-secondary">
            <div class="me-auto p-2 align-self-center">© 2022 Loker Solo. All Rights Reserved.</div>
            <div class="p-2 align-self-center">Temukan Kami di</div>
            <div class="p-2 text-primary"><img src="<?= base_url() . 'assets/image/instagram.png' ?>" height="30px" alt=""></div>
            <div class="p-2"><img src="<?= base_url() . 'assets/image/whatsapp.png' ?>" height="30px" alt=""></div>
            <div class="p-2"><img src="<?= base_url() . 'assets/image/line.png' ?>" height="30px" alt=""></div>
            <div class="p-2"><img src="<?= base_url() . 'assets/image/mail.png' ?>" height="30px" alt=""></div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts.js" type="text/javascript"></script>

</body>

</html>