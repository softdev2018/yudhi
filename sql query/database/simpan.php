<?php
  include 'koneksi.php';
  //menyimpan data kedalam variabel
  $table = "data_base";
	$nama = $_POST['nama'];
	$subject = $_POST['subject'];
	$isi = $_POST['isi'];
  // query SQL untuk insert data
  $query="INSERT INTO data_base SET nama='$nama',subject='$subject',isi='$isi'";
  mysqli_query($koneksi, $query);
  // mengalihkan ke halaman index.php
  header("location:index.php");
?>
