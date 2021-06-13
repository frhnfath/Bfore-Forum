<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : Pertanyaan baru</title>
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
								<a class="nav-link" href="index-signed.php">Beranda</a>
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

		<section id="forum-cover">
	    	<img id="forum-cover-img" src="images/header.png" alt="">
		</section>

		<section id="forum-content">
			<div class="card">
				<div class="card-header bg-primary">
				</div>
				<div class="card-item">
					<h3 class="m-4">Ajukan Pertayaan</h3>
					<form class="m-3 p-2">
						<div class="row g-3 align-items-center">
							<div class="col-1">
								<label for="inputPostTitle" class="col-form-label">Judul</label>
							</div>
							<div class="col-4">
								<input type="text" id="inputPostTitle" class="form-control">
							</div>
						</div>
						<div class="row g-3 align-items-center">
							<div class="col-1">
								<label for="inputPostCategory" class="col-form-label">Kategori</label>
							</div>
							<div class="col-lg-4">
								<select class="col-lg-12" name="inputPostCategory" id="inputPostCategory">
									<option value="Organisasi Mahasiswa">Organisasi Mahasiswa</option>
									<option value="Unit Kegiatan Mahasiwa">Unit Kegiatan Mahasiwa</option>
									<option value="Akademik">Akademik</option>
									<option value="Beasiwa">Beasiwa</option>
									<option value="Program Mahasiswa">Program Mahasiswa</option>
								</select>
							</div>
						</div>
						<div class="row g-3 align-items-center">
							<div class="col-1">
								<label for="inputPostDescription" class="col-form-label">Pesan</label>
							</div>
							<div id="newCommentContainer" class="col-lg-8">
								<div class="input-group">
									<textarea class="form-control" aria-label="kolom komentar" id="newComment"></textarea>
								</div>
							</div>
						</div>
						<div class="row g-3 align-items-center">
							<div class="col-1">
								<label for="inputPostTags" class="col-form-label">Tag</label>
							</div>
							<div class="col-4">
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="inputPostTags" placeholder="">
									<label for="inputPostTags">Tambahkan 3 tag untuk mendeskripsikan pertanyaan</label>
								  </div>
							</div>
						</div>
					<br>
					<div class="col-9 d-flex justify-content-end">
						<a type="button" class="btn btn-outline-secondary me-1" role="button"  href="forum-signed.php">Kembali</a>
						<button type="submit" class="btn btn-primary">Bagikan</button>
					</div>
					</form>
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
