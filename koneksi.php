<?php

$host="localhost";
$user="root";
$password="";
$db="db_bfore";
$koneksi = mysqli_connect($host, $user, $password, $db);

// check connection
if (mysqli_connect_error()){
  echo "Fail to connect to database : " . mysqli_connect_error();
}