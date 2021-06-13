<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : forum</title>
		<link rel="icon" type="image/ico" href="favicon.ico"/>
		<!-- STYLE AND BOOTSTRAP LOAD -->
		<link rel="stylesheet" href="{{asset('css/styles.css')}}" /> 
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
				<a class="navbar-brand" href="/index-signed">
						<img id="logoBFore" src="{{URL('/images/logo-Navbar.png')}}" alt="BFore-Logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsing" aria-controls="navbarCollapsing" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapsing">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link" href="/index-signed">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/about">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/forum-signed">Forum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Bantuan</a>
							</li>
							<li class="nav-item nav-fill">
								<a id="profileLinkHome" href="/profile-main"><img class="profilePict" src="{{URL::asset('images/profile1/profile1-pp.png')}}" alt="profilePicture"></a>
							</li>
						</ul>
						<a id="profileNameHome" class="nav-link" href="#">Nama Profil</a>
					</div>
				</div>
			</nav>
		</div>
		</section>

		<section id="forum-cover">
			<img id="forum-cover-img" src="https://images.unsplash.com/photo-1590508965885-90c5502bd6f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
		</section>

		<section id="profil-navbar">
			<div class="container mt-3 mb-3">
			<ul class="nav nav-pills justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="/profil-main">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Aktivitas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/profile-edit">Pengaturan Akun</a>
					</li>
				</ul>
			</div>
		</section>
		<main>
			<section id="activity-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row align-items-center border-bottom d-flex justify-content-between">
								<div class="col-lg-1">
									<button class="btn btn-outline-secondary btn-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<h4>Pertanyaan</h4>
								</div>
								<div class="col-lg-3" style="text-align: end;">
									<button class="btn btn-outline-primary btn-sm">Memberi suara</button>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-1">
									<button class="btn btn-light btm-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<p class="text-primary">Komunitas apa saja yang ada di Ilmu Komputer?</p>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-1">
									<button class="btn btn-light btm-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<p class="text-primary">Komunitas apa saja yang ada di Ilmu Komputer?</p>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-8">
									<a class="link-primary">Lihat lebih banyak</a>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12">
							<div class="row align-items-center border-bottom d-flex justify-content-between">
								<div class="col-lg-1">
									<button class="btn btn-outline-secondary btn-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<h4>Jawaban</h4>
								</div>
								<div class="col-lg-3" style="text-align: end;">
									<button class="btn btn-outline-primary btn-sm">Memberi suara</button>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-1">
									<button class="btn btn-light btm-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<p class="text-primary">
										Komunitas di ilkom ada competitive programing, cyber security, game development, agribot, agriweb, mobile apps development, data mining, dan ui ux. </p>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-1">
									<button class="btn btn-light btm-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<p class="text-primary">Komunitas apa saja yang ada di Ilmu Komputer?</p>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-8">
									<a class="link-primary">Lihat lebih banyak</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row align-items-center border-bottom d-flex justify-content-between">
								<div class="col-lg-1">
									<button class="btn btn-outline-secondary btn-sm disabled">5 </button>
								</div>
								<div class="col-lg-8">
									<h4>Tags</h4>
								</div>
								<div class="col-lg-3" style="text-align: end;">
									<button class="btn btn-outline-primary btn-sm">Memberi suara</button>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-lg-1">
									<button class="btn btn-light btm-sm disabled"></button>
								</div>
								<div class="col-lg-8">
									<p class="text-primary">
										Ormawa
								</div>
							<div class="row align-items-center">
								<div class="col-lg-8">
									<a class="link-primary">Lihat lebih banyak</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

	</body>
	<footer class="bg-secondary">
		<p>Copyright © 2021 BFore. All rights reserved.</p>
		<a class="fa fa-google socmed" href="https://sites.google.com/view/rpl-kelompok-3/produk?authuser=0"></a>
		<a class="fa fa-github socmed" href="https://github.com/frhnfath/RPL-3"></a>
	</footer>
</html>
