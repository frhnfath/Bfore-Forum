<?php
include "koneksi.php";

// // query cek data
// $signin = mysqli_query($koneksi, "SELECT * FROM table_mahasiwa WHERE email='$email' AND password='$password'");
// $check = mysqli_num_rows($signin);

// //cek apakah user telah login, jika belum

// if($check > 0) {
//   $_SESSION['email'] = $email;
//   $_SESSION['status'] = "Signed in";
//   header("Location: index.php?status=success");
// } else {
//   header("Location: signin.php?status=success");
// }

session_start();

if (isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["password"];

  // If form submitted, insert values into the database.
  $result = mysqli_query($koneksi, "SELECT * FROM table_mahasiswa WHERE email = '$email'");

  // cek username
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"]))  {  // check password
      $_SESSION["login"] = $row['id_user'];
      header("Location: index-signed.php");
      exit;
    } else { 
      echo "<script>alert('Email/Password do not match')</script>"; 
    }
  } 

}

?>