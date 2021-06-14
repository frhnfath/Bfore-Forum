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
		<title>BFore : Berita</title>
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
								<a class="nav-link" href="about.php">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="forum-signed.php">Forum</a>
							</li>
							<li class="nav-item nav-fil" display="inline-block drop-down-toggle">
								<div class="dropstart">
									<a id="profileLinkHome" class="drop-down-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<img class="profilePict" src="images/profile1/profile1-pp.png" alt="profilePicture">
										<p id="profileNameHome" class="text-primary" href="#">Nama Profil</p>
									</a>
									<ul class="dropdown-menu" aria-labelledby="profileLinkHome">
										<li><a class="dropdown-item" href="profile-main.php">Profil</a></li>
										<li><a class="dropdown-item" href="logout.php">Keluar</a></li>
									</ul>
								</div>
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

		<section id="profil-navbar">
			<div class="container mt-5 mb-3 d-flex justify-content-center align-items-center">
				<i class="fas fa-newspaper icon-inbutton"></i> <h4 style="display: inline-block;">Berita</h4>
			</div>
		</section>
		<main>
			<section id="profil-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 m-3">
							<div class="card">
								<h5 class="card-header">Berita Utama <span class="m-5" id="newsTimestamp">14 Juni 2021</span> </h5>
								<img id="newsTumbnail" src="images/forum/personal-finance.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Bantuan UKT Semester Genap Tahun Akademik 2020/2021</h5>
									<a href="news-read-signed.php" class="card-link link-primary">Baca selengkapnya ></a>
								</div>
							</div>
						</div>
						<div class="col-md-12 m-3">
							<div class="card">
								<h5 class="card-header">Berita Utama <span class="m-5" id="newsTimestamp">13 Juni 2021</span> </h5>
								<img id="newsTumbnail" src="images/forum/team_pag.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Piawai Mengolah Data Besar, Tim Ini Mendapatkan Juara di Gemastik XII</h5>
									<a href="news-read-signed.html" class="card-link link-primary">Baca selengkapnya ></a>
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
