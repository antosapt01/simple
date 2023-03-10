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
        <div class="row m-3">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="bg-light border-0 rounded px-3">
                    <nav class="align-middle" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class=" text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item active text-secondary" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
                <div class="bg-light border-0 rounded p-3 mb-3">
                    <div class="col-12">
                        <h5 class="fw-bold">Tentang Perusahaan</h5>
                    </div>
                    <div class="row">
                        <div class="col-2 text-center"><img src="https://images.glints.com/unsafe/70x0/glints-dashboard.s3.amazonaws.com/company-logo/e0111aa88ad25572ba6bc82a50c97c5e.png" alt=""></div>
                        <div class="col-10 g-0">
                            <div class="text-primary fw-bold"><?= $lowongans[0]->nama_perusahaan ?></div>
                            <div class="text-secondary lh-lg"><?= $lowongans[0]->bidang, ' ', $lowongans[0]->karyawan ?> karyawan</div>
                            <div class="text-secondary"><a href="#" class="text-decoration-none"><?= $lowongans[0]->situs ?></a></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-secondary text-small">
                            <?= $lowongans[0]->deskripsi ?>
                        </div>
                    </div>
                </div>
                <div class="bg-light border-0 rounded p-3 mb-3">
                    <button type="button" class="btn btn-primary">Fulltime</button>
                    <div class="col-12 my-2">
                        <h5 class="fw-bold py-2"><?= $lowongans[0]->title ?></h5>
                    </div>
                    <div class="fs-5">Ringkasan</div>
                    <div class="row">
                        <div class="col-6 text-start">
                            <div class="text-secondary lh-lg">Pendidikan</div>
                            <div class="text-secondary lh-lg">Besaran Gaji</div>
                            <div class="text-secondary lh-lg">Batas Lamaran</div>
                        </div>
                        <div class="col-6 g-0">
                            <div class="text-secondary fw-bold">: <?= $lowongans[0]->pendidikan_name ?></div>
                            <div class="text-secondary lh-lg">: <?= $lowongans[0]->gaji ?>/Bulan</div>
                            <div class="text-danger fw-bold">: <?php $date = date_create($lowongans[0]->batas_lamaran);
                                                                echo date_format($date, 'j F Y') ?></div>
                        </div>
                    </div>
                </div>
                <div class="bg-light border-0 rounded p-3 mb-3">
                    <div class="col-12 my-2">
                        <h5 class="fw-bold py-2">Skills</h5>
                    </div>
                    <div class="col-12">
                        <?php foreach($lowongans as $skill) : ?>
                            <a class="btn btn-primary" href="#" role="button"><?= $skill->skill_name ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="bg-light border-0 rounded p-3 mb-3">
                    <div class="col-12 my-2">
                        <h5 class="fw-bold py-2">Deskripsi Pekerjaan</h5>
                    </div>
                    <div class="fs-5">Requirement</div>
                    <ol class="list-group list-group-numbered my-2">
                        <li class="list-group-item border-0">Bachelor Degree in Computer Engineering/ Computer Science/ Information Technology or equivalent</li>
                        <li class="list-group-item border-0">At least 1 (one) year of experience in Java Programming</li>
                        <li class="list-group-item border-0">Java framework : Springboot, Hibernate.</li>
                        <li class="list-group-item border-0">Possess a strong logical & analytical skill in developing software</li>
                    </ol>
                    <div class="fs-5">Jobdesk</div>
                    <ol class="list-group list-group-numbered my-2">
                        <li class="list-group-item border-0">Design, develop, and implement based on document gathered system specifications</li>
                        <li class="list-group-item border-0">To take part in software and architectural development activities</li>
                        <li class="list-group-item border-0">Conduct software analysis, programming, testing, and debugging</li>
                        <li class="list-group-item border-0">Identifying production and non-production application issues</li>
                    </ol>
                </div>
                <div class="bg-light border-0 rounded p-3 mb-3 text-center">
                    <div class="col-12 my-2">
                        <h5 class="fw-bold py-2">Kirim Lamaran</h5>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary" href="#" role="button">Lamar Email</a>
                        <button type="button" class="btn btn-secondary btn">Tandai</button>
                        <button type="button" class="btn btn-secondary btn-square-md">Bagikan</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12 fs-5">
                <p>
                    Pencarian
                </p>
                <div class="col-12 btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn border border-dark-subtle">Riwayat</button>
                    <button type="button" class="btn border border-dark-subtle">Simpan</button>
                </div>
                <div class="accordion accordion-flush" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Profesi
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Account Officer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Admin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Admin Marketplace
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Administrasi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Akuntan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Analis
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Apoteker
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Arsitek
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Semua Profesi
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Status Kerja
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Freelance
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Full Time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Magang
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Part Time
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Pendidikan
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        SMP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        SMA/SMK
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        D3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        S1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Profesi
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Lokasi
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Jawa Tengah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Jawa Barat
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class="m-3 text-decoration-none text-secondary">Tentang Kami</a>
                <a href="" class="m-3 text-decoration-none text-secondary">Kontak</a>
                <a href="" class="m-3 text-decoration-none text-secondary">Kebijakan Beriklan </a>
                <a href="" class="m-3 text-decoration-none text-secondary">Pusat Bantuan</a>
                <a href="" class="m-3 text-decoration-none text-secondary">Pasang Lowongan</a>
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
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts.js" type="text/javascript"></script>

</body>

</html>