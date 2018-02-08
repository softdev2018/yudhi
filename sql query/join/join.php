<?php
$DB_host = "localhost";
$DB_username = "root";
$DB_password = "";
$DB_name = "join";

  $con = mysqli_connect($DB_host, $DB_username, $DB_password);

  if ($con) {
    echo "Koneksi Host Berhasil<br/>";
  } else {
    echo "Koneksi Host Gagal";
  }

  $find_db = mysqli_select_db($con,$DB_name);
  if ($find_db) {
    echo "Koneksi Database Berhasil<br/>";
  } else {
    echo "Koneksi Database Gagal";
  }

  $sql= 'SELECT pl.id_pelanggan, nama, tgl_transaksi, total_transaksi
        FROM pelanggan pl
        JOIN penjualan pn ON pl.id_pelanggan = pn.id_pelanggan';

  /* JOIN
  SELECT pl.id_pelanggan, nama, tgl_transaksi, total_transaksi
  FROM pelanggan pl
  JOIN penjualan USING(id_pelanggan)
  */

  /*LEFT OUTER JOIN
  SELECT pl.id_pelanggan, nama, tgl_transaksi, total_transaksi
  FROM pelanggan pl
  LEFT JOIN penjualan USING(id_pelanggan)
  */

  /*RIGHT OUTER JOIN
  SELECT pl.id_pelanggan, nama, tgl_transaksi, total_transaksi
  FROM pelanggan pl
  RIGHT JOIN penjualan USING(id_pelanggan)
  */

  /*IMPLISIT JOIN
  SELECT pl.id_pelanggan, nama, id_transaksi, tgl_transaksi, total_transaksi
  FROM pelanggan pl, penjualan pn
  WHERE pl.id_pelanggan = pn.id_pelanggan
  */


  $query = mysqli_query($con, $sql);
  if ($query) {
    echo "Query Berhasil";
  } else {
    echo "Query Gagal";
  }

  echo '<table>
  		<thead>
  			<tr>
  				<th>ID</th>
  				<th>Nama</th>
  				<th>Tanggal</th>
  				<th>Total</th>
  			</tr>
  		</thead>
  		<tbody>';

  while ($row = mysqli_fetch_array($query))
  {
  	echo '<tr>
  			<td>'.$row['id_pelanggan'].'</td>
  			<td>'.$row['nama'].'</td>
        <td>'.$row['tgl_transaksi'].'</td>
  			<td>'.number_format($row['total_transaksi'], 0, ',', '.').'</td>
  		</tr>';
  }
  echo '
  	</tbody>
  </table>';

 ?>
