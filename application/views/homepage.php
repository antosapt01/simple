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
			<a class="navbar-brand" href="#">Lowongan Kerja</a>
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
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url(); ?>assets/image/download.png" class="d-block w-100" style="height: 350px;" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url(); ?>assets/image/platform.jpg" class="d-block w-100" style="height: 350px;" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="d-block w-100" style="height: 350px;" alt="...">
			</div>
		</div>
	</div>
	<p class="m-4 fs-4 text">
		Rekomendasi Lowongan ❤️
	</p>
	<div class="m-2">
		<div class="text-center my-3">
			<div class="row mx-auto my-auto justify-content-center">
				<div id="appCarousel" class="carousel slide caro" data-bs-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active caro-item">
							<div class="col-md-3">
								<div class="card mx-3 border-0">
									<a href="#" class="btn btn-blue-light text-white position-absolute">Fulltime</a>
									<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top h-50" alt="...">
									<div class="card-body text-start">
										<h5 class="card-title fw-bold">Quality Assurance Engineer</h5>
										<div class="card-text text-small">Adi Data Informatika</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>Jakarta</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>IDR10.000.000 - 20.000.000/Bulan</div>
									</div>
									<div class="card-footer text-end">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item caro-item">
							<div class="col-md-3">
								<div class="card mx-3 border-0">
									<a href="#" class="btn btn-blue-light text-white position-absolute">Fulltime</a>
									<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top h-50" alt="...">
									<div class="card-body text-start">
										<h5 class="card-title fw-bold">
											<?php
											if (strlen("Customer Relationship Officer / Sales") > 24) {
												echo substr("Customer Relationship Officer / Sales", 0, 24) . ' ....';
											} else {
												echo ("Customer Relationship Officer");
											}
											?>
										</h5>
										<div class="card-text text-small">Global Platform Asiatic</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>Jakarta</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>IDR10.000.000 - 20.000.000/Bulan</div>
									</div>
									<div class="card-footer text-end">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item caro-item">
							<div class="col-md-3">
								<div class="card mx-3 border-0">
									<a href="#" class="btn btn-blue-light text-white position-absolute">Fulltime</a>
									<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top h-50" alt="...">
									<div class="card-body text-start">
										<h5 class="card-title fw-bold">Merchandiser</h5>
										<div class="card-text text-small">Jakmall.com</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>Jakarta</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>IDR10.000.000 - 20.000.000/Bulan</div>
									</div>
									<div class="card-footer text-end">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item caro-item">
							<div class="col-md-3">
								<div class="card mx-3 border-0">
									<a href="#" class="btn btn-blue-light text-white position-absolute">Fulltime</a>
									<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top h-50" alt="...">
									<div class="card-body text-start">
										<h5 class="card-title fw-bold">Senior Sales Executive</h5>
										<div class="card-text text-small">Partipost Indonesia</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>Jakarta</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>IDR10.000.000 - 20.000.000/Bulan</div>
									</div>
									<div class="card-footer text-end">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item caro-item">
							<div class="col-md-3">
								<div class="card mx-3 border-0">
									<a href="#" class="btn btn-blue-light text-white position-absolute">Fulltime</a>
									<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top h-50" alt="...">
									<div class="card-body text-start">
										<h5 class="card-title fw-bold">Visual Merchandising Staff</h5>
										<div class="card-text text-small">The Harvest Group</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>Jakarta</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>IDR10.000.000 - 20.000.000/Bulan</div>
									</div>
									<div class="card-footer text-end">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item caro-item">
							<div class="col-md-3">
								<div class="card mx-3 border-0">
									<a href="#" class="btn btn-blue-light text-white position-absolute">Fulltime</a>
									<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="card-img-top h-50" alt="...">
									<div class="card-body text-start">
										<h5 class="card-title fw-bold">Quality Assurance Engineer</h5>
										<div class="card-text text-small">Adi Data Informatika</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>Jakarta</div>
										<div class="card-text text-small"><i class="fa fas-edit"></i>IDR10.000.000 - 20.000.000/Bulan</div>
									</div>
									<div class="card-footer text-end">
										<small class="text-muted">Last updated 3 mins ago</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev bg-transparent w-aut" href="#appCarousel" role="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					</a>
					<a class="carousel-control-next bg-transparent w-aut" href="#appCarousel" role="button" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
					</a>
				</div>
			</div>
		</div>

		<div class="text-center p-3">
			<p class="">
				🥇🥈🥉
			</p>
			<p>
				Pasang iklan lowongan agar terhubung dengan pelamar potensial.
			</p>
			<p>
				<a href="<?php echo base_url(); ?>index.php/loker_controller/add_advertise"class="btn btn-primary text-decodarion-none">Pasang Lowongan Sekarang</a>
			</p>
		</div>
		<div class="row m-3">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<p class="fs-5">Lowongan Terbaru</p>
				<?php foreach ($lowongans as $lowongan) : ?>
					<div class="card mb-3 border-0">
						<div class="row g-0">
							<div class="col-md-4 max-height">
								<img src="<?php echo base_url(); ?>assets/image/download.png" class="img-fluid rounded" alt="...">
							</div>
							<div class="col-md-8">
								<a href="<?php echo base_url(); ?>index.php/loker_controller/detail/<?= $lowongan->id_lowongan ?>" class="text-decoration-none text-dark">
									<div class="card-body">
										<h5 class="card-title fw-bold"><?= $lowongan->title ?></h5>
										<div class="card-text"><?= $lowongan->nama_perusahaan ?></div>
										<div class="card-text text-small text-secondary"><i class="fa fas-edit"></i><?= $lowongan->alamat ?></div>
										<div class="card-text text-small text-secondary"><i class="fa fas-edit "></i>IDR <?= $lowongan->gaji ?>/Bulan</div>
										<div class="card-text text-small text-secondary"><i class="fa fas-edit "></i><?= $lowongan->pengalaman ?> tahun pengalaman</div>
										<div class="card-footer text-end border-0 m-2">
											<small class="text-muted position-absolute bottom-0 end-0 m-3">Last updated <?php $date = date_create($lowongan->updated_at);
																														echo date_format($date, "H") . ' hours ', date_format($date, "i") ?> mins ago</small>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="card mb-3 border-0" style="max-width: auto;">
					<div class="row g-0">
						<div class="col-md-4 max-height">
							<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="img-fluid  rounded" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title fw-bold">SEO Specialist</h5>
								<div class="card-text">Pt Inti Dharma Global Indo</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>Bekasi</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>IDR5.000.000 - 7.000.000/Bulan</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>1 - 3 tahun pengalaman</div>
								<div class="card-footer text-end border-0 m-2">
									<small class="text-muted position-absolute bottom-0 end-0 m-3">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3 border-0">
					<div class="row g-0">
						<div class="col-md-4 max-height">
							<img src="<?php echo base_url(); ?>assets/image/platform.jpg" class="img-fluid rounded" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title fw-bold">SEO Specialist</h5>
								<div class="card-text">Pt Inti Dharma Global Indo</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>Bekasi</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>IDR5.000.000 - 7.000.000/Bulan</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>1 - 3 tahun pengalaman</div>
								<div class="card-footer text-end border-0 m-2">
									<small class="text-muted position-absolute bottom-0 end-0 m-3">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3 border-0" style="max-width: auto;">
					<div class="row g-0">
						<div class="col-md-4 max-height">
							<img src="<?php echo base_url(); ?>assets/image/download.jpg" class="img-fluid rounded" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title fw-bold">Visual Merchandising Staff</h5>
								<div class="card-text">The Harvest Group</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>Bekasi</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>IDRPerusahaan tidak menampilkan gaji</div>
								<div class="card-text text-small"><i class="fa fas-edit"></i>1 - 3 tahun pengalaman</div>
								<div class="card-footer text-end border-0 m-2">
									<small class="text-muted position-absolute bottom-0 end-0 m-3">Last updated 3 mins ago</small>
								</div>
							</div>
						</div>
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
								<?php foreach ($profesis as $profesi) : ?>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
										<label class="form-check-label" for="flexCheckDefault">
											<?= $profesi->profesi_name ?>
										</label>
									</div>
								<?php endforeach; ?>
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
								<?php foreach ($statuses as $status) : ?>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="flexCheckChecked">
											<?= $status->status_name ?>
										</label>
									</div>
								<?php endforeach; ?>
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
								<?php foreach ($pendidikans as $pendidikan) : ?>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="flexCheckChecked">
											<?= $pendi->pendidikan_name ?>
										</label>
									</div>
								<?php endforeach; ?>
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