<?php
include "koneksi.php";

// // menerima nilai dari signin
$email=$_POST["email"];
$password=($_POST["password"]);

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
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
	$email = mysqli_real_escape_string($koneksi,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($koneksi,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `table_mahasiswa` WHERE email='$email'
and password='".md5($password)."'";
	$result = mysqli_query($koneksi, $query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
            // Redirect user to index.php
	    header("Location: index-signed.php");
         }else{
	echo "Email/password is incorrect";
  }
}

?>