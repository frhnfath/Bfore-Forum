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
								<a class="nav-link active" aria-current="page" href="#">Forum</a>
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

		<section id="forum-content">
			<div class="card">
				<div class="card-header bg-primary">
				</div>
				<div class="card-item">
					<div class="row">
						<div class="col-lg-9">
							<div class="d-flex w-100 justify-content-between">
								<h3 style="display: inline-block;">Pertanyaan Teratas</h3>
								<a class="btn btn-primary" role="button" href="forum-post.php"><i class="fa fa-pen-square icon-inbutton"></i> Bertanya</a>
							</div>
							<ul id="list-postingan" class="list-group feature-grid g-1">
                <?php
                  $forum = mysqli_query($koneksi, "SELECT * FROM table_forum ORDER BY id_forum desc");
                  while($tampil = mysqli_fetch_array($forum)) :
                   $rep = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(id_forum) FROM table_reply WHERE id_forum = '$tampil[id_forum]'"));

                ?>
								<a class="list-group-item list-group-item-action" href="postingan-signed.php?id_forum=<?=$tampil['id_forum'];?>">
									<div class="row">
										<div class="col-lg-6">
											<p id="postTitle"><?=$tampil['judul'];?></p>
										</div>
										<div class="col-lg-6 g-1">
											<div class="d-flex w-100 justify-content-end">
											<button id="badge-indicator" class="btn btn-primary btn-sm">
												Suara <span id="numVote" class="badge bg-secondary btn-sm"><?=$tampil['vote']; ?></span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												Jawaban <span id="numAnswer" class="badge bg-secondary">0</span>
											  </button>
											  </div>
										</div>
									</div>
								</a>
                <?php endwhile; ?>
              <!-- </ul>
								<a class="list-group-item list-group-item-action">
									<div class="row">
										<div class="col-lg-6">
											<p id="postTitle">Beasiswa apa saja yang sedang dibuka pendaftarannya</p>
										</div>
										<div class="col-lg-6 g-1">
											<div class="d-flex w-100 justify-content-end">
											<button id="badge-indicator" class="btn btn-primary btn-sm">
												Suara <span id="numVote" class="badge bg-secondary btn-sm">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												Jawaban <span id="numAnswer" class="badge bg-secondary">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												<i class="fas fa-eye"></i> <span id="numRead" class="badge bg-secondary">4</span>
											  </button>
											  </div>
										</div>
									</div>
								</a>
								<a class="list-group-item list-group-item-action">
									<div class="row">
										<div class="col-lg-6">
											<p id="postTitle">JUDUL TOPIK</p>
										</div>
										<div class="col-lg-6 g-1">
											<div class="d-flex w-100 justify-content-end">
											<button id="badge-indicator" class="btn btn-primary btn-sm">
												Suara <span id="numVote" class="badge bg-secondary btn-sm">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												Jawaban <span id="numAnswer" class="badge bg-secondary">1</span>
											  </button>
											  <button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
												<i class="fas fa-eye"></i> <span id="numRead" class="badge bg-secondary">4</span>
											  </button>
											  </div>
										</div>
									</div>
								</a>
							</ul> -->
							<div class="d-flex w-100 justify-content-end">
								<nav aria-label="...">
									<ul class="pagination">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Kembali</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Selanjutnya</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="Cari postingan" aria-label="Cari postingan" aria-describedby="button-addon2">
  								<button class="btn btn-outline-primary" type="button" id="button-addon2">
									  <i class="fas fa-search"></i>
								  </button>
							</div>
							<ul class="list-group feature-grid g-1">
								<li class="list-group-item bg-primary">Kategori</li>
                <?php
                  $cat = mysqli_query($koneksi, "SELECT * FROM table_category ORDER BY id_category");
                  while ($cato = mysqli_fetch_array($cat)) :

                  ?>
								<a class="list-group-item list-group-item-action"><?=$cato['category']?></a>
                <?php endwhile; ?>
							</ul>
							<ul class="list-group feature-grid g-1">
								<li class="list-group-item bg-primary">Berita</li>
								<a class="list-group-item list-group-item-action">
									<img id="news-item-img" class="rounded float-start" src="images/forum/personal-finance.png" alt="">
									<div class="d-flex w-100 justify-content-between">
										<p class="mb-1">
											Bantuan UKT Semester Genap Tahun Akademik 2020/2021
										</p>
									  </div>
								</a>
								<a class="list-group-item list-group-item-action">
									<img id="news-item-img" class="rounded float-start" src="images/forum/team_pag.png" alt="">
									<div class="d-flex w-100 justify-content-between">
										<p class="mb-1">
											Piawai Mengolah Data Besar, Tim Ini Mendapatkan Juara di Gemastik XII
										</p>
									</div>
								</a>
							</ul>
						</div>
					</div>
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
