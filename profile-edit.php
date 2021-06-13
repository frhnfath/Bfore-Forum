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
								<a class="nav-link" href="about.php">Tentang</a>
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

		<section id="forum-cover">
	    	<img id="forum-cover-img" src="images/header.png" alt="">
		</section>

		<section id="profil-navbar">
			<div class="container mt-3 mb-3">
			<ul class="nav nav-pills justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="profile-main.php">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="profile-act.php">Aktivitas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Pengaturan Akun</a>
					</li>
				</ul>
			</div>
		</section>
		<section id="profilEditContent">
<div id="profilEditContainer" class="container-fluid">
  <div id="profilEditContainer" class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
      <div class="position-sticky g-1">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a id="suntingProfilButton" class="nav-link link-dark active" role="button" onclick="suntingProfilFunct()" href="#">
				Sunting Profil
				<script>
					function suntingProfilFunct() {
						document.getElementById("suntingAkun").style.display = "none"
						document.getElementById("hapusAkun").style.display = "none"
						document.getElementById("suntingProfil").style.display = "block"
						document.getElementById("suntingProfilButton").classList.add('active')
					}
				</script>
			  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" role="button" onclick="suntingAkunFunct()" href="#">
			  Sunting Akun
			  <script>
				  function suntingAkunFunct() {
					  document.getElementById("suntingProfil").style.display = "none"
					  document.getElementById("hapusAkun").style.display = "none"
					  document.getElementById("suntingAkun").style.display = "block"
				  }
			  </script>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" role="button" onclick="hapusAkunFunct()" href="#">
				Hapus Akun
				<script>
					function hapusAkunFunct() {
						document.getElementById("suntingAkun").style.display = "none"
						document.getElementById("suntingProfil").style.display = "none"
						document.getElementById("hapusAkun").style.display = "block"
					}
				</script>
			  </a>
		</ul>
      </div>
	</nav>
	
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
	<section id="suntingProfil">
	  <div class="container">
		  <div class="row">
			  <div class="col-lg-6">
				  <div class="row justify-content-center">
					  <div class="col-lg-6">
						  <img src="images/profile1/profile1-pp.png" alt="PROFILE PICT">
					  </div>
				 <div class="row justify-content-center" style="text-align: center;">
					  <a href="" style="display: block" ><h5>Ganti foto profil</h5></a>
					  </div>
				  </div>
			  </div>
			  <div class="col-lg-6">
				  <h3>Informasi Pribadi</h3>
				  <form>
					<div class="mb-3">
						<label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" id="inputNamaLengkap" aria-describedby="namaLengkap">
					</div>
					<div class="mb-3">
						<label for="inputNIM" class="form-label">NIM</label>
						<input type="text" class="form-control" id="inputNIM">
					</div>
					<h3>Informasi Publik</h3>
					<div class="mb-3">
						<label for="inputNamaPengguna" class="form-label">Nama Pengguna</label>
						<input type="text" class="form-control" id="inputNamaPengguna">
					</div>
					<div class="mb-3">
						<label for="inputBio" class="form-label">Bio</label>
						<input type="text" class="form-control" id="inputBio">
					</div>
					<div class="mb-3">
						<label for="inputJurusan" class="form-label">Jurusan</label>
						<input type="text" class="form-control" id="inputJurusan">
					</div>
					<div class="mb-3">
						<label for="inputFakultas" class="form-label">Fakultas</label>
						<input type="text" class="form-control" id="inputFakultas">
					</div>
					<div class="d-flex justify-content-end">
						<button type="submit" class="btn btn-primary m-1">Simpan</button>
						<button type="reset" class="btn btn-outline-secondary m-1">Batalkan</button>
					</div>
				</form>
			  </div>
		  </div>
	  </div>
	</section>
	
	<section id="suntingAkun" style="display: none;">
	  <div class="container">
		  <div class="row">
			  <div class="col-lg-12">
				  <div class="row justify-content-center">
					  <div class="col-lg-6">
						  <img src="images/profile1/profile1-pp.png" alt="PROFILE PICT">
						  <h4 id="namaPengguna" style="display: inline-block; margin-left: 5%;">Dx</h4>
					  </div>
				  <div class="row justify-content-center">
					<div class="col-lg-12">
						<h3>Mengubah Kata Sandi</h3>
						<form>
							<div class="mb-3">
								<label for="inputOldPassword" class="form-label">Kata sandi lama</label>
								<input type="password" class="form-control" id="inputOldPassword" aria-describedby="namaOldPass">
							</div>
							<div class="mb-3">
								<label for="inputNewPassword" class="form-label">Kata sandi baru</label>
								<input type="password" class="form-control" id="inputNewPassword">
							</div>
							<div class="mb-3">
								<label for="inputNewPasswordComf" class="form-label">Konfirmasi kata sandi baru</label>
								<input type="password" class="form-control" id="inputNewPasswordComf">
							</div>
							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary m-1">Simpan</button>
								<button type="reset" class="btn btn-outline-secondary m-1">Batalkan</button>
							</div>
						</form>
						<br>
						<h3>Mengubah Email</h3>
						<form>
							<div class="mb-3">
								<label for="viewOldEmail" class="form-label">Email sekarang</label>
								<input type="text" readonly class="form-control" id="viewOldEmail" value="dxgg@dxgg.com">
							</div>
							<div class="mb-3">
								<label for="inputNewEmail" class="form-label">Email baru</label>
								<input type="email" class="form-control" id="inputNewEmail">
							</div>
							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary m-1">Simpan</button>
								<button type="reset" class="btn btn-outline-secondary m-1">Batalkan</button>
							</div>
						</form>
					</div>
			  </div>
		  </div>
	  </div>
	</section>

	<section id="hapusAkun" style="display: none;">
	    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Hapus Akun</h1>
		</div>
		<div class="container">
			<p>
			Sebelum mengonfirmasi bahwa Anda ingin profil Anda dihapus, kami ingin meluangkan waktu sejenak untuk menjelaskan implikasi dari penghapusan :
			</p> 
			<div class="alert alert-danger align-items-center" role="alert">
 			Penghapusan tidak dapat diubah, dan Anda tidak akan bisa mendapatkan kembali akun asli Anda, jika penghapusan ini dilakukan.
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="checkHapusAkun">
				<label class="form-check-label" for="checkHapusAkun">
					Saya telah membaca informasi yang disebutkan di atas dan memahami implikasi jika profil saya dihapus. Saya ingin melanjutkan penghapusan profil saya.
				</label>
			</div>
			<br>
			<div class="d-flex justify-content-end">
				<button type="submit" class="btn btn-danger">Hapus Akun</button>
			</div>
		</div>
	</section>
	</main>

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
