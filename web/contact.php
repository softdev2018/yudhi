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
