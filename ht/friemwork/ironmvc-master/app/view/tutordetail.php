<? @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
<body>
  <div id="container">
<? @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
    <? foreach($tutor as $tut) { ?>
      	<div class="detil-tutor">
         <h1><?= $tut["JUDUL"] ?></h1> 
         <img src="<?= asset::getImage($tut['GAMBAR']) ?>" alt="">
         <p>
           <?= $tut["DESKRIPSI"] ?>
         </p>
        </div>
    <? } ?>
    </div>
    
     <div class="entance">
       <div class="copy">
        copyright &copy; 2016 photography
       </div>
    </div>
  </div>
<? @include("_layout/_footer.php") ?>
