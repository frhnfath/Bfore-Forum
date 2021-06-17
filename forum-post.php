<?php

include "koneksi.php";

session_start();
if (!isset($_SESSION['login'])) {
  header("location: signin.php");
  exit;
}
?>

<?php 
  $currentuser = $_SESSION['login'];
  $sql = mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE id_user = $currentuser");
  $data = mysqli_fetch_array($sql);
  ?>
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
							<li class="nav-item nav-fil" display="inline-block drop-down-toggle">
								<div class="dropstart">
									<a id="profileLinkHome" class="drop-down-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<img class="profilePict" src="images/profile1/profile1-pp.png" alt="profilePicture">
										<p id="profileNameHome" class="text-primary">Nama Profil</p>
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

		<section id="forum-content">
			<div class="card">
				<div class="card-header bg-primary">
				</div>
				<div class="card-item">
					<h3 class="m-4">Ajukan Pertayaan</h3>
					<form action="" method="POST" class="m-3 p-2">
						<div class="row g-0 align-items-center">
							<div class="col-md-1">
								<label for="inputPostTitle" class="col-form-label">Judul</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="judul" id="inputPostTitle" class="form-control">
							</div>
						</div>
						<div class="row g-0 align-items-center">
							<div class="col-md-1">
								<label for="inputPostCategory" class="col-form-label">Kategori</label>
							</div>
							<div class="col-md-8">
								<select class="col-lg-12" name="inputPostCategory" id="inputPostCategory">
									<option value="1">Organisasi Mahasiswa</option>
									<option value="2">Unit Kegiatan Mahasiwa</option>
									<option value="3">Akademik</option>
									<option value="4">Beasiwa</option>
									<option value="5">Program Mahasiswa</option>
								</select>
							</div>
						</div>
						<div class="row g-0 align-items-center">
							<div class="col-md-1">
								<label for="inputPostDescription" class="col-form-label">Pesan</label>
							</div>
							<div id="newCommentContainer" class="col-md-8">
								<div class="input-group">
									<textarea name="isi" class="form-control" aria-label="kolom komentar" id="newComment"></textarea>
								</div>
							</div>
						</div>
					<div class="col-md-9 d-flex justify-content-end">
						<a type="button" class="btn btn-outline-secondary me-1" role="button"  href="forum-signed.php">Kembali</a>
						<button type="submit" class="btn btn-primary" name="submit">Bagikan</button>
					</div>
					</form>
          <?php
            if (isset($_POST['submit'])) {
              $judul = $_POST['judul'];
              $isi = $_POST['isi'];
              $category = $_POST['inputPostCategory'];
              $user = $data['id_user'];
              if ($judul && $isi) {
                $query = "INSERT INTO table_forum (judul, isi, id_category, id_user) VALUES ('$judul', '$isi', '$category', '$user')";
                $ver = mysqli_query($koneksi, $query);
                if (!$ver) {
                  echo mysqli_error($koneksi);
                  echo $currentuser;
                }
              } else {
                echo "isi judul dan isi";
              }
            }
            ?>
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
