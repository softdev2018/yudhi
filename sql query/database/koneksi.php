<?php
  $DB_host = "localhost";
  $DB_user = "root";
  $DB_password = "";
  $DB_name = "database";

  $con=mysqli_connect($DB_host,$DB_user,$DB_password);

  if ($con) {

  echo "Koneksi Host Berhasil. <br/>";

  }else {

  echo "Koneksi Host Gagal";

  }

  $find_db=mysqli_select_db($con,$DB_name);
  //To select the database
  if ($find_db) {

    echo "Database  Ada";

  }else {

    echo "Database Tidak Ada";

  }

  //session_start(); //To start the session

  //$query=mysqli_query($con,"select * from data_base");
  //made query after establishing connection with database.
?>
