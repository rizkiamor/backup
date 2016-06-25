<?php
$kd=$_POST['kdedit'];
?>
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Keterangan:</span>Keterangan !
  <br>
  1. Silahkan Masukan NOMOR KKS -> ENTER <br>
  2. JIKA TIDAK PUNYA LANGSUNG MASUKAN ANGKA 0 DI ENTER  <br><br>
  <p>
  <div class="input-group col-xs-12 col-sm-12">
    <select class="form-control" id="jenis">
      <option value="0">--- Pilih Jenis Usulan ---</option>
      <option value="PKH">-- PKH (Program Keluarga Harapan)</option>
      <option value="KKS">-- KKS (Kartu Keluarga Sejahtera)</option>
      <option value="KIS">-- KIS (Kartu Indonesia Sehat)</option>
      <option value="KPS">-- KPS (Kartu Perlindungan Sosial)</option>
      <option value="YATIM">-- yatim, piatu/yatim</option>
      <option value="BENCANA">-- Terkena Bencana Alam</option>
      <option value="DROP_OUT">-- Pernah Drop Out</option>
      <option value="DLL">-- Kelainan Fisik, Dll</option>
    </select><br>
    <input type="text" id="kks" class="form-control" placeholder="NOMOR KKS / PKH / KIS" aria-describedby="basic-addon1">
    <input type="hidden" id="nomor" value="<?php echo $kd; ?>">
<br>
</p><br><button class="btn btn-danger pull-right" onclick="siswa_usul();">simpan</button><br>
</div>  </div>
<div id="print">
</div>
