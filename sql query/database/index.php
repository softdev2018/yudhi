<h2>List Data</h2>
<table border="1">
    <tr><th>NO</th><th>NAMA</th><th>FAKULTAS</th><th>NIM</th></tr>
    <?php
    include 'koneksi.php';
    $mahasiswa = mysqli_query($con, "SELECT * from data_base");
    $no=1;
    foreach ($mahasiswa as $row){
        "<tr>
            <td>$no</td>
            <td>".$row['nama']."</td>
            <td>".$row['subject']."</td>
            <td>".$row['isi']."</td>
        </tr>";
        $no++;
    }
    ?>
</table>
