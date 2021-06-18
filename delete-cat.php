<?php
  include "koneksi.php";
  if (isset($_GET['id_category'])) {
    $category = $_GET['id_category'];
    mysqli_query($koneksi, "DELETE FROM table_category WHERE id_category = '$category'");
    header('Location: profile-admin-mod.php');
  }

?>