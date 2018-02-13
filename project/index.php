<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembukuan Tamu</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=quicksand:300,400,500,700">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <nav>
          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>
          <div class="logo">
            LOGO
          </div>
          <div class="menu">
            <ul>
              <li><a id="nav-tambah-data" href="javascript:void(0);" onclick="gantiMenu('tambah-data');">Home</li>
              <li><a id="nav-list-data" href="javascript:void(0);" onclick="gantiMenu('list-data')">About</li>
              <li><a id="nav-list-data" href="javascript:void(0);" onclick="gantiMenu('list-data')">Blog</li>
              <li><a id="nav-list-data" href="javascript:void(0);" onclick="gantiMenu('list-data')">Contact</li>
            </ul>
          </div>
        </nav>
      </header>
    </div>
    <div class="content">
      <div class="kata">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
    <div class="page-content-wrapper">
      <div class="well" id="tambah-data"><!--style="display:none;"-->
        <form id="tambah-data" class="form-horizontal" action="index.html" method="post">
          <div id="nama" class="form-group">
            <label class="control-label col-sm-3">Nama/NIM:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama"/><br/>
            </div>
          </div>
          <div id="instansi" class="form-group">
              <label class="control-label col-sm-3">Instansi:</label>
              <div class="col-sm-5">
                <select class="form-control" id="option">
                  <option>Fakultas Teknik</option>
                  <option>Fakultas Ekonomi&Bisnis</option>
                  <option>Fakultas Pertanian</option>
                  <option>Fakultas MIPA</option>
                  <option>Fakultas Kedoktera</option>
                  <option>Fakultas KIP</option>
                  <option>Fakultas SRD</option>
                </select><br/>
              </div>
          </div>
          <div id="keluhan" class="form-group">
              <label class="control-label col-sm-3">Keluhan:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="keluhan" placeholder="Masukkan Anda" /><br/>
              </div>
          </div>
          <div id="solusi" class="form-group">
              <label class="control-label col-sm-3">Solusi:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="solusi" placeholder="Masukkan Solusi Keluhan" /><br/>
              </div>
          </div>
          <div id="keterangan" class="form-group">
              <label class="control-label col-sm-3">Keterangan:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" /><br/>
              </div>
          </div>
          <div class="form-group" align="center">
            <label class="control-label col-sm-3"></label>
					       <div class="col-sm-5">
						      <input type="button" class="btn btn-primary btn-success" onclick="simpanData()" value="Simpan">
                  <input type="reset" class="btn btn-primary btn-warning" onclick="simpanData();" value="Reset"/>
					     </div>
          </div>
        </form>
      </div>
    </div>
        <!--script src="java.js"></script-->
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/jquery/jquery.min.js"></script>
  </body>
</html>
