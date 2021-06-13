<?php
include "koneksi.php";

// menerima nilai dari pendaftaran
$email=$_POST["email"];
$name=$_POST["name"];
$nim=$_POST["nim"];
$password=$_POST["password"];
$repass=$_POST["repass"];

// query input data ke dalam table_mahasiswa

$result = mysqli_query($koneksi, "SELECT nim FROM table_mahasiswa WHERE nim = '$nim'");
if(mysqli_fetch_assoc($result)) {
  echo "<script>alert('NIM is already used!')</script>";
  return false;
}

$resultemail = mysqli_query($koneksi, "SELECT email FROM table_mahasiswa WHERE email = '$email'");
if(mysqli_fetch_assoc($resultemail)) {
  echo "<script>alert('Email is already used!')</script>";
  return false;
}

if ($password != $repass) {
  echo "<script> alert('Password does not match!'); </script>";
} else {
  $password = password_hash($password, PASSWORD_DEFAULT);
  $sql = "INSERT INTO table_mahasiswa (email, nama, nim, password) VALUES ('$email', '$name', '$nim', '$password')";
  $hasil = mysqli_query($koneksi, $sql);
}

if ($hasil) {
  echo "You are signed up";
  $_SESSION['login'] = $email;
  $_SESSION['success'] = "You are now logged in";
  header("Location: index-signed.php?status=success");
} else {
  header("Location: signup.php?status=failed");
  echo "<script> alert('Failed to register!'); </script>";
}

?>