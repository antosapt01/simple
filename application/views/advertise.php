<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>simple app</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css" />
    <style>
        body {
            font-family: 'Poppins';
            background-color: #ffeded;
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
        <div class="text-center text-white p-5 bg-primary" style="min-height:auto">
            <div class="fs-3">📃 Loker Solo</div>
            <div class="fs-1 fw-bold">Pusat Bantuan</div>
            <div class="fs-6">Temukan pertanyaan yang sering ditanyakan terkait Loker Solo</div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="text-center fs-3 m-2">Paket Iklan</div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title">Free Trial</h5>
                        <img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top" style="height: 200px;" class="card-img-top" alt="...">
                        <p class="card-text">
                        <ul class="list-group text-small text-small">
                            <li class="list-group-item  border-0">1x Posting di Instagram @lokersolo</li>
                            <li class="list-group-item  border-0">Tag akun instagram</li>
                            <li class="list-group-item  border-0">1x Post web (keep 30 hari)</li>
                            <li class="list-group-item  border-0">1x Posting di Facebook</li>
                            <li class="list-group-item  border-0">1x Posting Channel Telegram</li>
                            <li class="list-group-item  border-0">1x Posting Tiktok</li>
                        </ul>
                        </p>
                    </div>
                    <div class="m-3">
                        <a href="<?php base_url() ?>form_advertise" class="btn btn-primary w-100 p-2">
                            <div class="text-small">Rp 50.000</div>
                            <div class="text-small">Pasang Lowongan Sekarang</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title">Starter</h5>
                        <img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top" style="height: 200px;" class="card-img-top" alt="...">
                        <p class="card-text">
                        <ul class="list-group text-small">
                            <li class="list-group-item  border-0">1x Posting di Instagram @lokersolo</li>
                            <li class="list-group-item  border-0">Tag akun instagram</li>
                            <li class="list-group-item  border-0">1x Post web (keep 30 hari)</li>
                            <li class="list-group-item  border-0">1x Posting di Facebook</li>
                            <li class="list-group-item  border-0">1x Posting Channel Telegram</li>
                            <li class="list-group-item  border-0">1x Posting Tiktok</li>
                        </ul>
                        </p>
                    </div>
                    <div class="m-3">
                        <a href="<?php base_url() ?>index.php/loker_controller/form_advertise" class="btn btn-primary w-100 p-2">
                            <div class="text-small">Rp 50.000</div>
                            <div class="text-small">Pasang Lowongan Sekarang</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="card-title">Basic</h5>
                        <img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top" style="height: 200px;" class="card-img-top" alt="...">
                        <p class="card-text">
                        <ul class="list-group text-small">
                            <li class="list-group-item  border-0">1x Posting di Instagram @lokersolo</li>
                            <li class="list-group-item  border-0">Tag akun instagram</li>
                            <li class="list-group-item  border-0">1x Post web (keep 30 hari)</li>
                            <li class="list-group-item  border-0">1x Posting di Facebook</li>
                            <li class="list-group-item  border-0">1x Posting Channel Telegram</li>
                            <li class="list-group-item  border-0">1x Posting Tiktok</li>
                        </ul>
                        </p>
                    </div>
                    <div class="m-3">
                        <a href="<?php base_url() ?>index.php/loker_controller/form_advertise" class="btn btn-primary w-100 p-2">
                            <div class="text-small">Rp 50.000</div>
                            <div class="text-small">Pasang Lowongan Sekarang</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="m-2 mt-5">
            <div class="text-center text-white p-5 bg-white rounded" style="min-height:auto">
                <div class="fs-3">Mengapa Kami?</div>
                <div class="row text-secondary">
                    <div class="col-3 my-3">
                        <div class="fs-1 fw-bold"><img src="https://lokersolo.id/storage/pk-whyus/L62af5d80ab416.png" height="150px" alt=""></div>
                        <div class="text-small">
                            @lokersolo merupakan akun info lowongan kerja dengan followers instagram terbanyak di Solo Raya dengan jumlah 252.000 dan terus bertambah setiap harinya. Selain itu Lokersolo juga menggunakan website dengan tampilan yang user fiendly dengan banyak fitur yang dapat memudahkan menjaring banyak calon pelamar yang berkompeten
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="fs-1 fw-bold"><img src="https://lokersolo.id/storage/pk-whyus/F62ab2474ad15b.png" height="150px" alt=""></div>
                        <div class="text-small">
                            Lokersolo mempunyai views mencapai 46.000 kali tayang dan mampu mendapat 66.000 jangkauan hanya dalam waktu 1 minggu sejak iklan diposting. Melihat data statistik tersebut, jelas Lokersolo jauh lebih unggul dan memiliki kesempatan paling besar untuk menjaring pelamar kerja dibandingkan dengan website lowongan kerja lain di kota solo yang mungkin hanya dilihat 500-1500 orang pengunjung tiap harinya
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="fs-1 fw-bold"><img src="https://lokersolo.id/storage/pk-whyus/V62ab2468c3447.png" height="150px" alt=""></div>
                        <div class="text-small">
                            Lokersolo mempunyai lebih dari 250.000 followers (presentase 45% Wanita & 55% Laki-laki) dengan rata-rata usia kerja 18-24 tahun
                        </div>
                    </div>
                    <div class="col-3 my-3">
                        <div class="fs-1 fw-bold"><img src="https://lokersolo.id/storage/pk-whyus/F62ab245faf3ef.png" height="150px" alt=""></div>
                        <div class="text-small">
                            Lokersolo adalah platform Web App dan Mobile App yang memudahkan Anda untuk memantau lowongan dan pelamar yang mendaftar di perusahaan Anda. Sehingga anda dapat melihat kandidat melalui berbagai gadget baik smartphone maupun desktop.
                        </div>
                    </div>
                </div>
                <div class="text-start mt-5 text-small">
                    <div class="fw-bold text-secondary">Keterangan</div>
                    <ol class="list-group list-group-numbered lh-1">
                        <li class="list-group-item border-0 text-secondary">Semua Iklan tidak dibatasi waktu tayang (unlimited), tetapi akan terus tergeser kebawah apabila ada iklan baru</li>
                        <li class="list-group-item border-0 text-secondary">Jeda tiap posting adalah 3 hari (untuk paket iklan > 2 posting)</li>
                        <li class="list-group-item border-0 text-secondary">Jam posting kami yang menentukan sesuai antrian</li>
                        <li class="list-group-item border-0 text-secondary">Poster foto dan materi bebas tetapi tidak menyalahi aturan dan norma yang berlaku di Indonesia</li>
                        <li class="list-group-item border-0 text-secondary">Invoice iklan sebagai klaim kepada pimpinan perusahaan (bila diperlukan)</li>
                        <li class="list-group-item border-0 text-secondary">Untuk desain poter, proses pembuatan desain maksimal 24 jam, tergantung antrian . Dan revisi poster maksimal 3 kali</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center my-4 fs-4">Our Happy Clients</div>
            <div class="row text-secondary text-center">
                <div class="col-3 my-5">
                    <img src="https://lokersolo.id/storage/loker/B640743990d0e7.jpg" height="150px" alt="">
                </div>
                <div class="col-3 my-5">
                    <img src="https://lokersolo.id/storage/loker/G6406e9d69400f.png" height="150px" alt="">
                </div>
                <div class="col-3 my-5">
                    <img src="https://lokersolo.id/storage/loker/M6406e306bd178.jpg" height="150px" alt="">
                </div>
                <div class="col-3 my-5">
                    <img src="https://lokersolo.id/storage/loker/O6406bde817a5b.jpg" height="150px" alt="">
                </div>
                <div class="col-3 my-5">
                    <img src="https://lokersolo.id/storage/loker/M6406e306bd178.jpg" height="150px" alt="">
                </div>
                <div class="col-3 my-5">
                    <img src="https://lokersolo.id/storage/loker/O6406bde817a5b.jpg" height="150px" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white mt-5 p-4 pb-32 rounded-lg shadow text-small-footer">
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