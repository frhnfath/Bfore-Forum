<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : Akun kamu</title>
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
							<li class="nav-item">
								<a class="nav-link" href="#">Bantuan</a>
							</li>
							<li class="nav-item nav-fill">
								<a id="profileLinkHome" href="/profil-main"><img class="profilePict" src="images/profile1/profile1-pp.png" alt="profilePicture"></a>
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
						<a class="nav-link active" aria-current="page" href="#">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile-act.php">Aktivitas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile-admin-mod.php">Moderasi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile-edit.php">Pengaturan Akun</a>
					</li>
				</ul>
			</div>
		</section>
		<main>
			<section id="profil-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 mb-3" style="text-align: center;">
							<img src="images/profile1/profile1-pp.png" alt="profile" style="display: inline-block;">
							<h2 class="m-3" style="display: inline-block;">DX</h2>
						</div>
						<div class="col-lg-6 d-flex justify-content-center mb-5">
							<div class="card border-primary mb-3" style="max-width: 18rem;">
								<div class="card-header"><i class="fa fa-user icon-inbutton"></i>Profil Jaringan</div>
								<div class="card-body text-primary">
									<dl class="row">
										<dd class="list-item"><i class="fa fa-user-graduate icon-inbutton"></i>Prodi <span id="profilProdi">Biokimia</span></dd>
										<dd><i class="fa fa-university icon-inbutton"></i>Fakultas <span id="profilFakultas">Matematika dan Ilmu Pengetahuan Alam</span></dd>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12 d-flex justify-content-start">
							<div class="border-bottom">
								<h4>Tags teratas <span id="numTags"> (22)</span></h4>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<div id="tag-badgeProf"  class="badge bg-secondary text-wrap">Ormawa</div>
										</div>
										<div class="col-lg-9">
											<div id="tag-badgeProf"  class="badge bg-light text-wrap text-dark">Kiriman 86   Skor 868</div>
										</div>
										<div class="col-lg-3">
											<div id="tag-badgeProf"  class="badge bg-secondary text-wrap">Ilkom</div>
										</div>
										<div class="col-lg-9">
											<div id="tag-badgeProf"  class="badge bg-light text-wrap text-dark">Kiriman 86   Skor 868</div>
										</div>
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
