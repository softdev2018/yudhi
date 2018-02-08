<h2>List Mahasiswa</h2>
<table border="1">
   <tr><th>NO</th><th>NIM</th><th>NAMA</th><th>JURUSAN</th></tr>
   <?php
   include "koneksi.php";
   $data=mysqli_query($con,"SELECT * from data_base");
   if ($data === FALSE) {
   die(mysql_error());
   }
   $no=1;
   while($hasil=mysqli_fetch_array($data)){

   echo "<tr>
   <td>$no</td>
   <td>$hasil[nama]</td>
   <td>$hasil[subject]</td>
   <td>$hasil[isi]</td>
   </tr>";
   $no++;
   }
   ?>
</table>
