<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Belajar Database</title>
  </head>
  <body>
    <br/>
    <br/>
    <h2 align="center">Silakan Masukkan Data Anda</h2>
    <br/>
    <br/>
    <form class="form-horizontal" action="simpan.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-3">Nama</label>
        <div class="col-sm-3">
          <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3">Fakultas</label>
        <div class="col-sm-5">
          <input type="text" name="subject" class="form-control" placeholder="Fakultas">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3">NIM</label>
        <div class="col-sm-5">
          <input type="text" name="isi" class="form-control" placeholder="NIM">
        </div>
      </div>
      <div class="form-group" align="center">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-5">
          <button type="submit" name="btn-simpan" class="btn btn-primary" value="simpan">Simpan</button>
        </div>
      </div>
    </form>
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="asset/jquery/jquery.min.js"></script>
  </body>
</html>
