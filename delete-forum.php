<?php
  include "koneksi.php";
  if (isset($_GET['id_forum'])) {
    $forum = $_GET['id_forum'];
    mysqli_query($koneksi, "DELETE FROM table_forum WHERE id_forum = '$forum'");
    header("Location: profile-admin-mod.php");
  }

?>