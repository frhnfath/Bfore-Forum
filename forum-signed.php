<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : forum</title>
		<link rel="icon" type="image/ico" href="favicon.ico"/>
		<!-- STYLE AND BOOTSTRAP LOAD -->
		<link rel="stylesheet" href="css/styles.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
			crossorigin="anonymous"
		/>
		<!-- FONTS -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Secular+One&family=Slabo+13px&display=swap" rel="stylesheet">
		<!-- FONTAWESOME -->
		<script src="https://kit.fontawesome.com/0efdbc0531.js" crossorigin="anonymous"></script>
		<!-- BOOTSTRAP SCRIPTS -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
			crossorigin="anonymous"
		></script>
	</head>
	
	<body>
		<section id="navigator">
		<div class="container-fluid bg-light">
			<!-- Nav Bar -->
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<div class="container-fluid">
				<a class="navbar-brand" href="index-signed.php">
						<img id="logoBFore" src="images/logo-Navbar.png" alt="BFore-Logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsing" aria-controls="navbarCollapsing" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapsing">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link" href="index-signed.php">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/about">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Forum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Bantuan</a>
							</li>
							<li class="nav-item nav-fill">
								<a id="profileLinkHome" href="profile-main.php"><img class="profilePict" src="images/profile1/profile1-pp.png" alt="profilePicture"></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		</section>

		<section id="forum-cover">
	    	<img id="forum-cover-img" src="images/header.png" alt="">
		</section>

		<section id="forum-content">
			<div class="card">
				<div class="card-header bg-primary">
				</div>
				<div class="card-item">
					<div class="row">
						<div class="col-lg-9">
							<div class="d-flex w-100 justify-content-between">
								<h3 style="display: inline-block;">Pertanyaan Teratas</h3>
								<a class="btn btn-primary" role="button" href="forum-post.php"><i class="fa fa-pen-square icon-inbutton"></i> Bertanya</a>
							</div>
							<ul id="list-postingan" class="list-group feature-grid g-1">
								<a class="list-group-item list-group-item-action" href="postingan-signed.php">
									<div class="row">
										<div class="col-lg-6">
											<p id="postTitle">UKM apa yang paling diminati anak fisika</p>
											<div id="tag-badge"  class="badge bg-secondary text-wrap">Ormawa</div>
											<div id="tag-badge" class="badge bg-secondary text-wrap">Ilkom</div>
											<div id="tag-badge" class="badge bg-secondary text-wrap">FMIPA</div>
										</div>
										<div class="col-lg-6 g-1">
											<div class="d-flex w-100 justify-content-end">
											<button id="badge-indicator" class="btn btn-primary btn-sm">
												Suara <span id="numVote" class="badge bg-secondary btn-sm">2</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												Jawaban <span id="numAnswer" class="badge bg-secondary">3</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												<i class="fas fa-eye"></i> <span id="numRead" class="badge bg-secondary">4</span>
											  </button>
											  </div>
										</div>
									</div>
								</a>
								<a class="list-group-item list-group-item-action">
									<div class="row">
										<div class="col-lg-6">
											<p id="postTitle">Beasiswa apa saja yang sedang dibuka pendaftarannya</p>
											<div id="tag-badge"  class="badge bg-secondary text-wrap">Beasiswa</div>
											<div id="tag-badge" class="badge bg-secondary text-wrap">Faperta</div>
										</div>
										<div class="col-lg-6 g-1">
											<div class="d-flex w-100 justify-content-end">
											<button id="badge-indicator" class="btn btn-primary btn-sm">
												Suara <span id="numVote" class="badge bg-secondary btn-sm">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												Jawaban <span id="numAnswer" class="badge bg-secondary">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												<i class="fas fa-eye"></i> <span id="numRead" class="badge bg-secondary">4</span>
											  </button>
											  </div>
										</div>
									</div>
								</a>
								<a class="list-group-item list-group-item-action">
									<div class="row">
										<div class="col-lg-6">
											<p id="postTitle">JUDUL TOPIK</p>
											<div id="tag-badge"  class="badge bg-secondary text-wrap">TAG1</div>
											<div id="tag-badge" class="badge bg-secondary text-wrap">TAG2</div>
										</div>
										<div class="col-lg-6 g-1">
											<div class="d-flex w-100 justify-content-end">
											<button id="badge-indicator" class="btn btn-primary btn-sm">
												Suara <span id="numVote" class="badge bg-secondary btn-sm">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												Jawaban <span id="numAnswer" class="badge bg-secondary">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												<i class="fas fa-eye"></i> <span id="numRead" class="badge bg-secondary">4</span>
											  </button>
											  </div>
										</div>
									</div>
								</a>
							</ul>
							<div class="d-flex w-100 justify-content-end">
								<nav aria-label="...">
									<ul class="pagination">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Kembali</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item" aria-current="page">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">Selanjutnya</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Cari postingan" aria-label="Cari postingan" aria-describedby="button-addon2">
  								<button class="btn btn-outline-primary" type="button" id="button-addon2">
									  <i class="fas fa-search"></i>
								  </button>
							</div>
							<ul class="list-group feature-grid g-1">
								<li class="list-group-item bg-primary">Kategori</li>
								<a class="list-group-item list-group-item-action">Organisasi Mahasiswa</a>
								<a class="list-group-item list-group-item-action">Unit Kegiatan Mahasiswa</a>
								<a class="list-group-item list-group-item-action">Akademik</a>
								<a class="list-group-item list-group-item-action">Beasiswa</a>
							</ul>
							<ul class="list-group feature-grid g-1">
								<li class="list-group-item bg-primary">Berita</li>
								<a class="list-group-item list-group-item-action">
									<img id="news-item-img" class="rounded float-start" src="images/forum/personal-finance.png" alt="">
									<div class="d-flex w-100 justify-content-between">
										<p class="mb-1">
											Bantuan UKT Semester Genap Tahun Akademik 2020/2021
										</p>
									  </div>
								</a>
								<a class="list-group-item list-group-item-action">
									<img id="news-item-img" class="rounded float-start" src="images/forum/team_pag.png" alt="">
									<div class="d-flex w-100 justify-content-between">
										<p class="mb-1">
											Piawai Mengolah Data Besar, Tim Ini Mendapatkan Juara di Gemastik XII
										</p>
									</div>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

	</body>
	<footer class="bg-secondary">
		<p>Copyright © 2021 BFore. All rights reserved.</p>
		<a class="fa fa-google socmed" href="https://sites.google.com/view/rpl-kelompok-3/produk?authuser=0"></a>
		<a class="fa fa-github socmed" href="https://github.com/frhnfath/RPL-3"></a>
	</footer>
</html>
