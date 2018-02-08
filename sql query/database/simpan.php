<?php
  include 'koneksi.php';
  //menyimpan data kedalam variabel
  $table = "data_base";
	$nama = $_POST['nama'];
	$subject = $_POST['subject'];
	$isi = $_POST['isi'];
  // query SQL untuk insert data
  $query="INSERT INTO data_base SET nama='$nama',subject='$subject',isi='$isi'";
  $tambahdata = mysqli_query($con, $query);
  if (! $tambahdata) {
    die('Gagal Tambah Data: '.mysql_error());
  }
  echo "Berhasil Tambah Data\n";
  mysqli_close($con);
  // mengalihkan ke halaman index.php
  header("location:index.php");
  //$sql = "INSERT INTO data_base ".
    //       "(nama, subject, isi) ".
      //     "VALUES('$nama','$subject',$isi, NOW())";
    //mysqli_select_db('data_base');
    //$tambahdata = mysqli_query( $con, $sql );
    //if(! $tambahdata )
    //{
    //  die('Gagal Tambah Data: ' . mysql_error());
    //}
    //echo "Berhasil tambah data\n";
    //mysql_close($koneksi);
    //}
    //else
    //{


?>
