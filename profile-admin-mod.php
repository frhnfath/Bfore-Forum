<?php
  include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : Moderasi</title>
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
						<a class="nav-link" href="profile-admin-main.php">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Moderasi</a>
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
				<i class="fas fa-newspaper"></i> Kelola Berita
				<script>
					function suntingProfilFunct() {
						document.getElementById("modKategori").style.display = "none"
						document.getElementById("modPostingan").style.display = "none"
						document.getElementById("modBerita").style.display = "block"
					}
				</script>
			  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" role="button" onclick="suntingAkunFunct()" href="#">
			  <i class="fas fa-layer-group"></i> Kelola Kategori
			  <script>
				  function suntingAkunFunct() {
					  document.getElementById("modBerita").style.display = "none"
					  document.getElementById("modPostingan").style.display = "none"
					  document.getElementById("modKategori").style.display = "block"
				  }
			  </script>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-dark" role="button" onclick="hapusAkunFunct()" href="#">
				<i class="fas fa-file-alt"></i> Kelola Postingan
				<script>
					function hapusAkunFunct() {
						document.getElementById("modBerita").style.display = "none"
						document.getElementById("modKategori").style.display = "none"
						document.getElementById("modPostingan").style.display = "block"
					}
				</script>
			  </a>
		</ul>
      </div>
	</nav>
	
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-3">
	<section id="modBerita">
	  <div class="container">
		  <div class="row">
			  <div class="d-flex width-100 justify-content-between mb-3">
					<h4>Kelola Berita</h4>
					<a class="btn btn-primary" role="button" href="post-admin-berita.php"><i class="fa fa-pen-square icon-inbutton"></i> Tambah berita</a>
			  </div>
			  <div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped table-sm">
					  <thead>
						<tr class="table-primary">
						  <th>Judul</th>
						  <th>Isi</th>
						  <th>Pranala</th>
						  <th>Opsi</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>Bantuan UKT</td>
						  <td>Tahapan pelaksanaan program, kriteria penerima, dokumen pendukung</td>
						  <td><img src="images/forum/personal-finance.png" width="25%" alt=""></td>
						  <td style="text-align: center;" >
							  <a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-pen m-1"></i></a>
							  <a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-search m-1"></i></a>
							  <a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-times m-1"></i></a>
						  </td>
						</tr>
						<tr>
							<td>Juara Gemastik</td>
							<td>IPB University berhasil meraih penghargaan juara 
								Harapan dari divisi lomba Penambangan Data.</td>
							<td><img src="images/forum/team_pag.png" width="25%" alt=""></td>
							<td style="text-align: center;" >
								<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-pen m-1"></i></a>
								<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-search m-1"></i></a>
								<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-times m-1"></i></a>
							</td>
						</tr>
					  </tbody>
					</table>
				  </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<section id="modKategori" style="display: none;">
		<div class="container">
			<div class="row">
				<div class="d-flex width-100 justify-content-between mb-3">
					  <h4>Kelola Kategori</h4>
					  <a class="btn btn-primary" role="button" href="cat-add.php"><i class="fa fa-pen-square icon-inbutton"></i> Tambah Kategori Baru</a>
				</div>
				<div class="col-md-12">
				  <div class="table-responsive">
					  <table class="table table-striped table-sm">
						<thead>
						  <tr class="table-primary">
							<th>No</th>
							<th>Nama Kategori</th>
							<th>Opsi</th>
						  </tr>
						</thead>
						<tbody>
              <?php 
                $i = 0;
                $tampilcat = mysqli_query($koneksi, "SELECT * FROM table_category");
                while($datacat = mysqli_fetch_array($tampilcat)) :

              $i++;
              ?>
						  <tr>
							<td><?=$i;?></td>
							<td><?=$datacat['category'];?></td>
							<td style="text-align: center;" >
								<a role="button" href="cat-edit.php?id_category=<?= $datacat["id_category"]; ?>"><i id="iconOptionBut" class="text-dark fas fa-pen m-1"></i></a>
								<a role="button" href="delete-cat.php?id_category=<?= $datacat["id_category"]; ?>"><i id="iconOptionBut" class="text-dark fas fa-times m-1"></i></a>
							</td>
						  </tr>
              <?php endwhile; ?>
						  <!-- <tr>
							  <td>Juara Gemastik</td>
							  <td>IPB University berhasil meraih penghargaan juara 
								  Harapan dari divisi lomba Penambangan Data.</td>
								  <td style="text-align: center;" >
									<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-pen m-1"></i></a>
									<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-search m-1"></i></a>
									<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-times m-1"></i></a>
								</td>
						  </tr> -->
						</tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="modPostingan" style="display: none;">
		<div class="container">
			<div class="row">
				<div class="d-flex wiFdth-100 justify-content-between mb-3">
					  <h4>Kelola Postingan</h4>
					  <a class="btn btn-primary" href="forum-post.php"><i class="fa fa-pen-square icon-inbutton"></i> Tambah Forum Baru</a>
					  </div>
				</div>
				<div class="col-md-12">
				  <div class="table-responsive">
					  <table class="table table-striped table-sm">
						<thead>
						  <tr class="table-primary">
							<th>Judul</th>
							<th>Isi</th>
							<th>Oleh</th>
							<th>Tanggal</th>
							<th>Opsi</th>
						  </tr>
						</thead>
						<tbody>
            <?php 
                $tampilpos = mysqli_query($koneksi, "SELECT * FROM table_forum");
                while($datapos = mysqli_fetch_array($tampilpos)) :

                ?>
                  <tr>
                  <td><?=$datapos['judul'];?></td>
                  <td><?=$datapos['isi'];?></td>
                  <?php
                    $u = $datapos['id_user'];
                    $tampilan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE id_user = $u"));
                  ?>
                  <td><?=$tampilan['nama'];?></td>
                  <td><?=$datapos['forum_waktu'];?></td>
                  <td style="text-align: center;" >
                    <a role="button" href="forum-edit.php?id_forum=<?= $datapos["id_forum"]; ?>"><i id="iconOptionBut" class="text-dark fas fa-pen m-1"></i></a>
                    <a role="button" href="delete-forum.php?id_forum=<?= $datapos["id_forum"]; ?>"><i id="iconOptionBut" class="text-dark fas fa-times m-1"></i></a>
                  </td>
                  </tr>
              <?php endwhile; ?>
						  <!-- <tr>
							  <td>Juara Gemastik</td>
							  <td>IPB University berhasil meraih penghargaan juara 
								  Harapan dari divisi lomba Penambangan Data.</td>
							<td>Dx</td>
							<td>2020-06-1</td>
							<td style="text-align: center;" >
								<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-pen m-1"></i></a>
								<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-search m-1"></i></a>
								<a role="button" href="#"><i id="iconOptionBut" class="text-dark fas fa-times m-1"></i></a>
							</td>
						  </tr> -->
						</tbody>
					  </table>
					</div>
				</div>
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
