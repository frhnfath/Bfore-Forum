<?php
// initialising variables
$host="localhost";
$user="root";
$password="";
$db="db_bfore";
$errors = array();
$koneksi = mysqli_connect($host, $user, $password, $db);

// check connection
if (mysqli_connect_error()){
  echo "Fail to connect to database : " . mysqli_connect_error();
}
?>

<?php
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
//$query_builder = TRUE;
// Connect to DB
// $koneksi = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
//?>