<?php
include "koneksi.php";

// menerima nilai dari pendaftaran
$email=$_POST["email"];
$name=$_POST["nama"];
$nim=$_POST["nim"];
$password=$_POST["password"];
$repass=$_POST["repass"];

// query input data ke dalam table_mahasiswa

if ($password != $repass) {
  echo "Password does not match!";
} else {
  $password=md5($_POST["password"]);
  $sql = "INSERT INTO table_mahasiswa (email, nama, nim, password) VALUES ('$email', '$name', '$nim', '$password')";
  $hasil = mysqli_query($koneksi, $sql);
}

if ($hasil) {
  echo "You are signed up";
  header("Location: index-signed.php?status=success");
} else {
  echo "Signed up failed";
  exit;
}


