<?php
session_start();
if($_SESSION){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color:#eee;
		}
		.row {
			margin:100px auto;
			width:350px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:50px;
			margin-top:20px;
		}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Pendaftaran</h2>
			<div class="daftar">
				
				<?php
				if(isset($_POST['daftar'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					$nama		= $_POST['nama'];
					$email		= $_POST['email'];
					$level		= $_POST['level'];
					
					  // query SQL untuk insert data
				  $query="INSERT INTO users SET username='$username', password='$password', nama='$nama',email='$email',level='$level'";
				  $tambahdata = mysqli_query($koneksi, $query);
				  if (! $tambahdata) {
					die('Gagal Tambah Data: '.mysql_error());
				  }
				  echo "Berhasil Tambah Data\n";
				  mysqli_close($con);
				  // mengalihkan ke halaman index.php
				  header("location:index.php");
					}
				?>
				
				<form role="form" action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Email" required autofocus />
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="1">Administrator</option>
							<option value="2">Dosen</option>
							<option value="3">Mahasiswa</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="daftar" class="btn btn-primary btn-block" value="Daftar" />
					</div>
				</form>
			</div>
			Copyright &copy; 2018 GOODHEL
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>