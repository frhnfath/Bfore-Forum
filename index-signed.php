<?php

include "koneksi.php";

session_start();
if (!isset($_SESSION['login'])) {
  header("location: signin.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Forum mahasiswa IPB">
		<meta name="author" content="Kelompok 3 RPL">
		<title>BFore : Forum Kampus IPB</title>
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
		<section id="navigator bg-light">
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
								<a class="nav-link active" aria-current="page" href="#">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="logout.php">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="forum-signed.php">Forum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Bantuan</a>
							</li>
							<li class="nav-item nav-fill">
								<a id="profileLinkHome" href="profile-main.php"><img class="profilePict" src="images/profile1/profile1-pp.png" alt="profilePicture"></a>
							</li>
						</ul>
						<a id="profileNameHome" class="nav-link" href="#">Nama Profil</a>
					</div>
				</div>
			</nav>
		</div>
		</section>

		<section id="promoCarousel">
			<div id="promo-carousel" class="carousel slide" data-ride="true" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="2000">
						<div class="row">
							<div class="col-lg-6">
								<h2 class="caption-carousel">Belajar, perluas wawasan, jalin koneksi baru dengan mahasiswa lain melalui forum.</h2>
							</div>
							<div class="col-lg-6">
								<img class="rounded carousel-image" src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="">
							</div>
						</div>
					</div>
					<div class="carousel-item" data-bs-interval="2500">
						<div class="row">
							<div class="col-lg-6">
								<h2 class="caption-carousel">Berkembang menjadi mahasiswa multidisipliner dengan berdiskusi.</h2>
							</div>
							<div class="col-lg-6">
								<img class="rounded carousel-image" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
							</div>
						</div>
					</div>
					<div class="carousel-item" data-bs-interval="2500">
						<div class="row">
							<div class="col-lg-6">
								<h2 class="caption-carousel">Saling bantu dan berkolaborasi dalam memecahkan berbagai masalah.</h2>
							</div>
							<div class="col-lg-6">
								<img class="rounded carousel-image" src="https://images.unsplash.com/photo-1460518451285-97b6aa326961?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="">
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#promo-carousel" data-bs-slide="prev">
					<span id="carousel-cont-left" class="carousel-control-prev-icon" aria-hidden="true"></span>
				</button>
				<button class="carousel-control-next " type="button" data-bs-target="#promo-carousel" data-bs-slide="next">
					<span id="carousel-cont-right" class="carousel-control-next-icon" aria-hidden="true"></span>
				</button>
			</div>
		</section>

		<section id="midSection bg-light">
			<div class="midTitleSep"></div>
			<div class="container col-xxl-8 px-4 py-5">
			  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			  <div class="col-10 col-sm-8 col-lg-6">
				  <img src="images/home-Circle.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
				</div>
				<div class="col-lg-6">
				  <h1 class="display-5 fw-bold lh-1 mb-3">Dapat terhubung dengan banyak pengguna di dalam forum</h1>
				  <p class="lead">Saling bantu dan berkolaborasi dalam memecahkan berbagai masalah. 
					  Belajar, perluas wawasan, jalin koneksi baru dengan mahasiswa lain melalui forum. 
					  Saling bantu dan berkolaborasi dalam memecahkan berbagai masalah.
				  </p>
				  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
					<a type="button" class="btn btn-primary btn-lg px-4 me-md-2" href="forum-signed.php" role="button">Jelajahi forum</a>
					<a type="button" class="btn btn-outline-secondary btn-lg px-4" href="forum-post.php" role="button">Bertanya sekarang</a>
				  </div>
				</div>
			  </div>
			</div>
		</section>
		
		<section id="features bg-light">
			<div class="midTitleSep">
				<h2>Forum Kampus IPB</h2>
			</div>

			<div id="featureGrid" class="row feature-grid">
				<div class="col-lg-4 col-md-6 g-4">
					<div class="card h-100 border-warning">
						<div class="card-body">
							<div class="card-content">
								<i class="fas fa-pencil-alt featureObject"></i>
								<h4 class="featureCaption">Pos</h4>
								<p>Berbagi konten dalam forum dengan memposting cerita serta gambar.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 g-4">
					<div class="card h-100 border-warning">
						<div class="card-body">
							<div class="card-content">
								<i class="fas fa-comment-alt featureObject"></i>
								<h4 class="featureCaption">Komen</h4>
								<p>Berkomentar dalam postingan pada forum untuk berdiskusi.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 g-4">
					<div class="card h-100 border-warning">
						<div class="card-body">
							<div class="card-content">
								<i class="fas fa-arrow-up featureObject"></i>
								<h4 class="featureCaption">Vote</h4>
								<p>Komentar dan postingan dapat diberi suara positif atau negatif. 
									Konten paling menarik naik ke atas.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="midTitleSep"></div>
		</section>

	</body>
	<footer class="bg-secondary">
		<p>Copyright © 2021 BFore. All rights reserved.</p>
		<a class="fa fa-google socmed" href="https://sites.google.com/view/rpl-kelompok-3/produk?authuser=0"></a>
		<a class="fa fa-github socmed" href="https://github.com/frhnfath/RPL-3"></a>
	</footer>
</html>
