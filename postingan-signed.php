<?php
include "koneksi.php";

session_start();
if (!isset($_SESSION['login'])) {
  header("location: signin.php");
  exit;
}

$id = $_GET["id_forum"];

$konten = mysqli_query($koneksi, "SELECT * FROM table_forum WHERE id_forum = $id");
$isi = mysqli_fetch_array($konten);
$au = $isi["id_user"];

$auth = mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE id_user = '$au'");
$author = mysqli_fetch_array($auth);
?>

<?php 
  $currentuser = $_SESSION['login'];
  $sql = mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE id_user = $currentuser");
  $data = mysqli_fetch_array($sql);
  $idu = $data['id_user'];
  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>BFore : Post</title>
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
				<a class="navbar-brand" href="/index-signed">
						<img id="logoBFore" src="images/logo-Navbar.png" alt="BFore-Logo">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsing" aria-controls="navbarCollapsing" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapsing">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link"href="index-signed.php">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">Tentang</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="forum-signed.php">Forum</a>
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
							<div id="judul-postingan" class="d-flex w-100 justify-content-between">
								<div class="col-lg-6">
									<h3 id="postTitle"><?=$isi['judul'];?></h3>
								</div>
								<div class="col-lg-6 g-1">
									<div class="d-flex w-100 justify-content-end">
									<button id="badge-indicator" class="btn btn-primary btn-sm">
										Suara <span id="numVote" class="badge bg-secondary btn-sm"><?=$isi['vote'];?></span>
										</button>
										<button id="badge-indicator" class="btn btn-primary btn-sm" disabled>
										Jawaban <span id="numAnswer" class="badge bg-secondary">0</span>
										</button>
									</div>
								</div>
							</div>
							<div id="deskripsiPertanyaan" class="container">
								<div id="postContentContainer" class="row">
									<div class="col-md-1">
										<div id="vote-cont" class="btn-group-vertical align-items-center">
											<i id="fawesome-button" class="fas fa-chevron-up"></i>
											<p id="vote-cont-count"><?=$isi['vote'];?></p>
											<i id="fawesome-button" class="fas fa-chevron-down"></i>
										</div>
									</div>
									<div class="col-md-11">
										<div class="row">
											<div class="col-md-11 mb-3">
												<p id="postDescription" ><?=$isi['isi'];?></p>
											</div>
											<div id="postCardContainer" class="col-sm-11 d-flex">
												<div id="postProfileCard" class="card mb-3">
													<div class="row g-0">
														<div class="col-md-4">
															<img class="profilePictPost" src="images/profile1/profile1-pp.png" alt="profilePicture">
														</div>
														<div class="col-md-8">
															<div class="card-body">
																<h6 class="card-title">Ditanya <br> <span id="timePosted"><?=$isi['forum_waktu'];?></span></h6>
																<p id="namaPengguna" class="card-text">Oleh <?=$author['nama'];?></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- BAGIAN JAWABAN -->
							<h3 class="border-bottom" style="margin-left: 27px;"><span id="numAnswer" ></span>  Komentar</h3>
							<div id="jawaban-pertanyaan" class="container">
              <?php
                $re = mysqli_query($koneksi, "SELECT * FROM table_reply WHERE id_forum = $id");
                $res = mysqli_fetch_array($re);
                while($rep = mysqli_fetch_array($re)) :

                  ?>
								<div class="row border-bottom">
									<div class="col-md-1">
										<div id="vote-cont" class="btn-group-vertical align-items-center">
											<i id="fawesome-button" class="fas fa-chevron-up"></i>
											<p id="vote-cont-count" ><?=$rep['vote'];?></p>
											<i id="fawesome-button" class="fas fa-chevron-down"></i>
										</div>
									</div>
									<div class="col-md-11">
										<div class="row border-bottom">
											<div class="col-md-11 mb-3">
												<p id="answerDescription" ><?=$rep['rep'];?></p>
											</div>
											<div id="postCardContainer" class="col-sm-11 d-flex">
												<div id="postProfileCard" class="card mb-3">
													<div class="row g-0">
														<div class="col-md-4">
															<img class="profilePictPost" src="images/profile1/profile1-pp.png" alt="profilePicture">
														</div>
														<div class="col-md-8">
															<div class="card-body">
																<h6 class="card-title">Ditanya <span id="timePosted"><?=$rep['date_created']; ?></span></h6>\
                                <?php
                                  $u = $res['id_user'];
                                  $a = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE id_user = $u"));

                                  ?>
																<p id="namaPengguna" class="card-text"><?=$a['nama'];?></p>
															</div>
														</div>
													</div>
												</div>
											</div>
                      <?php endwhile; ?>
										</div>
                    

									</div>
									<!-- BAGIAN INPUT JAWABAN -->
									<div class="col-md-11">
									<h4 class="mt-3" style="margin-left: 27px;">Tambahkan komentar</h4>
									<div id="deskripsiPertanyaan" class="col-md-12">
                  <form action="" method="POST">
											<div class="input-group">
												<textarea class="form-control" name="reply" aria-label="kolom komentar" id="newComment" required></textarea>
											</div>
											<br>
											<div class="d-flex justify-content-end">
												<a type="button" class="btn btn-outline-secondary me-1" role="button" href="forum-signed.php">Kembali</a>
												<button type="submit" name="btn-reply" class="btn btn-primary">Bagikan</button>
											</div>
                  </form>
                    <?php
                      if (isset($_POST['btn-reply'])) {
                        $reply = $_POST['reply'];
                        $forum = $isi['id_forum'];
                        if ($reply == "") {
                          echo "<script>alert('text kosong')</script>";
                          exit;
                        }
                        $query = "INSERT INTO table_reply (id_forum, id_user, rep) VALUES ('$forum', '$idu', '$reply')";
                        $hasil = mysqli_query($koneksi, $query);
                        mysqli_error($koneksi);
                      }
                    ?>
									</div>
								</div>
							</div>
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

    <?php

    ?>
     

	</body>
	<footer class="bg-secondary">
		<p>Copyright © 2021 BFore. All rights reserved.</p>
		<a class="fa fa-google socmed" href="https://sites.google.com/view/rpl-kelompok-3/produk?authuser=0"></a>
		<a class="fa fa-github socmed" href="https://github.com/frhnfath/RPL-3"></a>
	</footer>
</html>
