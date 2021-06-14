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
						<a class="navbar-brand" href="/index">
							<img id="logoBFore" src="images/logo-Navbar.png" alt="BFore-Logo">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsing" aria-controls="navbarCollapsing" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapsing">
							<ul class="navbar-nav ms-auto">
								<li class="nav-item">
									<a class="nav-link" href="index.php">Beranda</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="about.php">Tentang</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Forum</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Bantuan</a>
								</li>
								<li class="nav-item">
									<a id="tombolLink" class="nav-link" href="signin.php">Masuk</a>
								</li>
								<li class="nav-item">
									<a id="tombolLink" class="nav-link" href="signup.php">Daftar</a>
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
								<div class="container d-flex w-100 justify-content-center">
								<h5 id="newsTitle" class="m-3">Bantuan UKT Semester Genap Tahun Akademik 2020/2021</h5>
								</div>
								<img id="newsTumbnail" src="images/forum/personal-finance.png" class="card-img-top" alt="...">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 d-flex w-100 justify-content-start">
											<h5> <span id="newsTimestamp" ></span> 14 Juni 2021</h5>
										</div>
										<div class="col-md-12 d-flex w-100 justify-content-center p-3">
											<p style="text-align: justify;">Untuk mendapatkan ide yang terbaik, kita harus memahami terlebih dahulu perbedaan antara kreativitas, penemuan, dan inovasi. Tiga poin penting ini yang disampaikan oleh Ifnu Bima, alumni Ilmu Komputer IPB yang sekarang bekerja sebagai Head of Product di BlackBerry Messenger.
												Dalam materi yang beliau sampaikan dalam kegiatan ideation IPB Informatics Competition (ICON) tanggal 30 Maret 2019 lalu, beliau mengajarkan kita bahwa ide sangatlah murah. Ide dapat ditemukan dari manapun dan dari siapapun, yang membuat ide mahal adalah bagaimana kita menambahkan nilai guna dan diperjualbelikan dalam masyarakat. Ketika ide kita tergolong mahal, saat itu bisa dinamakan inovasi. Beliau menjelaskan bahwa terdapat berbagai jenis inovasi dan level inovasi yang wajib kita ketahui.
												Beliau melanjutkan materinya dengan mengenalkan framework Quick and Dirty Method yang digunakan oleh perusahaan-perusahaan besar untuk mengidentifikasi oportunitas inovasi. Tidak hanya itu, beliau juga mengajarkan peserta tentang Business Model Canvas, dan juga konsep pembuatan aplikasi seperti Mockup dan Wireframe.  Mengakhiri pemaparan materi, beliau ingin seluruh peserta ideation menggali ide dengan menuliskan minimal 50 ide dalam kertas yang berhubungan dengan cabang lomba yang sedang mereka ikuti.</p>
										</div>
										<div class="col-md-12 d-flex w-100 justify-content-end p-3">
											<form>
												<input type="button" class="btn btn-outline-primary" value="Kembali" onclick="history.back()">
											</form>
										</div>
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
