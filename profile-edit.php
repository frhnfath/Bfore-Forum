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
  $sql = mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE email = '$currentuser'");
  $data = mysqli_fetch_array($sql);
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
            <a id="suntingProfilButton" class="nav-link link-dark" role="button" onclick="suntingProfilFunct()" href="#">
				<i class="fas fa-user-alt"></i> Sunting Profil
				<script>
					function suntingProfilFunct() {
						document.getElementById("suntingAkun").style.display = "none"
						document.getElementById("hapusAkun").style.display = "none"
						document.getElementById("suntingProfil").style.display = "block"
					}
				</script>
			  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" role="button" onclick="suntingAkunFunct()" href="#">
			  <i class="fas fa-user-cog"></i> Sunting Akun
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
				<i class="fas fa-user-alt-slash"></i> Hapus Akun
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
				  <form action="" method="POST">
					<div class="mb-3">
						<label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" id="inputNamaLengkap" aria-describedby="namaLengkap" value="<?php echo $data['nama'] ?>">
					</div>
					<div class="mb-3">
						<label for="inputNIM" class="form-label">NIM</label>
						<input type="text" class="form-control" name="nim" id="inputNIM" value="<?php echo $data['nim']; ?>">
					</div>
					<h3>Informasi Publik</h3>
					<div class="mb-3">
						<label for="inputNamaPengguna" class="form-label">Nama Pengguna</label>
						<input type="text" class="form-control" name="username" id="inputNamaPengguna" value="<?php echo $data['username'] ?>">
					</div>
					<div class="mb-3">
						<label for="inputJurusan" class="form-label">Jurusan</label>
						<input type="text" class="form-control" name="jurusan" id="inputJurusan" value="<?php echo $data['jurusan'] ?>">
					</div>
					<div class="mb-3">
						<label for="inputFakultas" class="form-label">Fakultas</label>
						<input type="text" class="form-control" name="fakultas" id="inputFakultas" value="<?php echo $data['fakultas'] ?>">
					</div>
					<div class="d-flex justify-content-end">
						<button type="submit" class="btn btn-primary m-1" name="update-info">Simpan</button>
						<button type="reset" class="btn btn-outline-secondary m-1">Batalkan</button>
					</div>
				</form>
        <?php
        if(isset($_POST['update-info'])) {
          $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
          $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
          $username = mysqli_real_escape_string($koneksi, $_POST['username']);
          $jurusan = mysqli_real_escape_string($koneksi, $_POST['jurusan']);
          $fakultas = mysqli_real_escape_string($koneksi, $_POST['fakultas']);
          mysqli_query($koneksi, "UPDATE table_mahasiswa SET nama = '$nama', nim ='$nim', username = '$username', jurusan = '$jurusan', fakultas = '$fakultas' WHERE email = '$currentuser'");
          echo "<script>alert('Information updated, please refresh this page')</script>";
          exit;
        }
        ?>
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
						<form action="" method="POST">
							<div class="mb-3">
								<label for="inputOldPassword" class="form-label">Kata sandi lama</label>
								<input type="password" class="form-control" id="inputOldPassword" aria-describedby="namaOldPass" name="old-pass">
							</div>
							<div class="mb-3">
								<label for="inputNewPassword" class="form-label">Kata sandi baru</label>
								<input type="password" class="form-control" name="new-pass" id="inputNewPassword">
							</div>
							<div class="mb-3">
								<label for="inputNewPasswordComf" class="form-label">Konfirmasi kata sandi baru</label>
								<input type="password" class="form-control" name="renew-pass" id="inputNewPasswordComf">
							</div>
							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary m-1" name="save-password">Simpan</button>
								<button type="reset" class="btn btn-outline-secondary m-1">Batalkan</button>
							</div>
						</form>
            <?php
              if (isset($_POST['save-password'])) {
                $oldpass = mysqli_real_escape_string($koneksi, $_POST['old-pass']);
                $newpass = mysqli_real_escape_string($koneksi, $_POST['new-pass']);
                $repass = mysqli_real_escape_string($koneksi, $_POST['renew-pass']);
                if (password_verify($oldpass, $data['password'])) {
                  echo "<script>alert('same password!')</script>";
                  exit;
                }
                if ($newpass != $repass) {
                  echo "<script>alert('password do not match!')</script>";
                  exit;
                }
                $newpass = password_hash($newpass, PASSWORD_DEFAULT);
                mysqli_query($koneksi, "UPDATE table_mahasiswa SET password = '$newpass' WHERE email = '$currentuser'");
                echo "<script>alert('Password changed')</script>";
              }
            ?>
						<br>
						<h3>Mengubah Email</h3>
						<form action="" method="POST">
							<div class="mb-3">
								<label for="viewOldEmail" class="form-label">Email sekarang</label>
								<input type="text" readonly class="form-control" id="viewOldEmail" name="email-lama" value="<?php echo $data['email'];?>">
							</div>
							<div class="mb-3">
								<label for="inputNewEmail" class="form-label">Email baru</label>
								<input type="email" class="form-control" id="inputNewEmail" name="email-baru">
							</div>
							<div class="d-flex justify-content-end">
								<button type="submit" class="btn btn-primary m-1" name="save-email">Simpan</button>
								<button type="reset" class="btn btn-outline-secondary m-1">Batalkan</button>
							</div>
						</form>
            <?php
              if (isset($_POST["save-email"])){
                $email = mysqli_real_escape_string($koneksi, $_POST["email-lama"]); 
                $new = mysqli_real_escape_string($koneksi, $_POST["email-baru"]); 
                if ($email == $new) {
                  echo "<script>alert('Email cannot be indentical')</script";
                  exit;
                }
                mysqli_query($koneksi, "UPDATE table_mahasiswa SET email = '$new' WHERE email = '$currentuser'");
              }
            ?>
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
				<input class="form-check-input" type="checkbox" value="" id="checkHapusAkun" required>
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
