<? @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
  <div id="container">
<? @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
        <? foreach($foto as $ft) {?>
        <a href=<?= url('welcome/foto/'.$ft["IDFOTO"]) ?>>
        <div class="item">
          <div class="image-hover">
          <div class='date'><i class="fa fa-calendar"></i> <?= asset::dateIn($ft["TANGGALUPLOAD"]) ?></div>
            <h1><?= $ft["JUDUL"] ?></h1>
          </div>
        	<img src="<?= asset::getImage($ft['GAMBAR']) ?>" alt="">
        </div>
        </a>
        <? } ?>
    </div>
    <div class="entance">
      <h1>kategori foto</h1>
      <? foreach($kategoris as $kategori){ ?>
        <a href=<?= url('welcome/category/'.$kategori['IDKATEGORI']) ?>><?= $kategori["NAMAKATEGORI"] ?></a>
       <? } ?> 
       <div class="copy">
    copyright &copy; 2016 photography
  </div>
    </div>
  </div>
<? @include("_layout/_footer.php") ?>
