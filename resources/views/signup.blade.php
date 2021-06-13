<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Forum mahasiswa IPB">
		<meta name="author" content="Kelompok 3 RPL">
		<title>Bergabung ke BFore</title>
		<link rel="icon" type="image/ico" href="favicon.ico"/>
		<!-- STYLE AND BOOTSTRAP LOAD -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
			crossorigin="anonymous"
    />
    <!-- Custom Style for Sign-In-->
        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }
        </style>
		<link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
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
  
<body id="body-signin" class="text-center">
  <main class="form-signin">
    <form>
     	<a class="navbar-brand" href="/index">
        <img class="mb-4" src="{{URL('/images/logo-Navbar.png')}}" alt="" width="40%" height="60%">
			</a>
      <h1 class="h3 mb-3 fw-normal">Bergabung Forum</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Alamat Email</label>
      </div>
      <div class="form-floating">
        <input type="name" class="form-control" id="floatingInput" placeholder="text">
        <label for="floatingInput">Nama</label>
      </div>
      <div class="form-floating">
        <input type="nim" class="form-control" id="floatingInput" placeholder="text">
        <label for="floatingInput">NIM</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Kata Sandi</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPasswordVal" placeholder="Password">
        <label for="floatingPassword">Konfirmasi Kata Sandi</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
      <p class="mt-5 mb-3 text-muted" style="display: inline-block; margin-right: 3%;">Sudah memiliki akun?</p>
      <a type="button" class="btn btn-outline-primary" href="/signin" role="button">Masuk</a>
    </form>
  </main>
</body>
</html>
