<? @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
  <div id="container">
<? @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
       <div class="detail-foto">
       <? foreach($foto as $ft) { ?>
       <div class="judul"><?= $ft["JUDUL"] ?></div>
       <div class="date"><?= asset::dateIn($ft["TANGGALUPLOAD"]); ?></div>
       <div class="cat"><?= $catname ?></div>
       <div class="desc">"<?= $ft["DESKRIPSI"] ?>"</div>
         <div class="img"><img src='<?= asset::getImage($ft["GAMBAR"]) ?>'  alt=""></div>
        <? } ?>
       </div>
        <? foreach($other as $oth) { ?>
       <div class="tutorial-item no-border">
          <div class="title"><?= $oth["JUDUL"] ?></div>
          <div class="img">
            <img src="<?= asset::getImage($oth['GAMBAR']) ?>" alt="">
          </div>
          <p>
            <? $content = strip_tags($oth["DESKRIPSI"]); echo $content;  ?>
          </p>
          <a href ="<?= url('welcome/foto/'.$oth['IDFOTO']) ?>" class="button">hits &rarr; </a>
      </div>
      <? } ?>
    </div>
    <div class="entance">
      <h1>kategori foto</h1>
      <? foreach($kategoris as $kategori){ ?>
        <? if($catname == $kategori["NAMAKATEGORI"]){ ?>
          <a href="<?= url('welcome/category/'.$kategori['IDKATEGORI']) ?>" class="igno"><?= $kategori["NAMAKATEGORI"] ?></a>
        <? } else { ?>
          <a href=<?= url('welcome/category/'.$kategori['IDKATEGORI']) ?>><?= $kategori["NAMAKATEGORI"] ?></a>
        <? } ?>

       <? } ?> 
       <div class="copy">
    copyright &copy; 2016 photography
  </div>
    </div>
  </div>
<? @include("_layout/_footer.php") ?>
