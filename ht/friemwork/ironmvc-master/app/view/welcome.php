<?php @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
<body>
  <div id="container">
<?php @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
        <?php foreach($foto as $ft) {?>
        <a href=<?php = url('welcome/foto/'.$ft["IDFOTO"]) ?>>
        <div class="item">
        	<div class="blockout"></div>
        	<img src="<?php = asset::getImage($ft['GAMBAR']) ?>" alt="">
        </div>
        </a>
        <?php } ?>
      	<?php foreach($tutor as $tut) { ?>
      	<div class="tutorial-item">
      		<div class="title"><?= $tut["JUDUL"] ?></div>
      		<div class="img">
          <img src="<?php= asset::getImage($tut['GAMBAR']) ?>" alt="">
          </div>
      		<p>
      			<?php $content = substr(strip_tags($tut["DESKRIPSI"]), 0,200); echo $content; ?>
      		</p>
      		<a href ="<?php = url('welcome/tutr/'.$tut['IDTUTORIAL']) ?>" class="button">read more &rarr; </a>
      	</div>
      	<?php } ?>
    </div>
  </div>
<?php include("_layout/_footer.php") ?>
