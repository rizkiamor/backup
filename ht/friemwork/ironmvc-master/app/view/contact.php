<? @include("_layout/_header.php") ?>
<!-- <object type="text/html" data="blabla.html"></object> -->
<body>
  <div id="container">
<? @include("_layout/_menu.php") ?>
    <div class="header"></div>
    <div class="content">
        <div class="item white-space">
        	<i class='fa fa-phone'></i>
        </div>

        <div class="item white-space">
          <i class='fa fa-map'></i>
        </div>

       <div class="item white-space">
          <i class='fa fa-slack'></i>
        </div>
      	
      	<div class="tutorial-item">
      		<div class="title">telpone kami</div>
      		<p>
      			hubungi kami di nomor berikut : 085732138985
      		</p>
      	</div>
      	<div class="tutorial-item">
      		<div class="title">sosial media</div>
      		<p>
            <i class='fa fa-facebook'></i> photography indonesia <br />
            <i class='fa fa-twitter'></i> @photography <br >
            <i class='fa fa-instagram'></i> photography on instagram <br >
      			<i class='fa fa-google-plus'></i> photography on plus
      		</p>
      	</div>
      	<div class="tutorial-item">
      		<div class="title">saran</div>
      		<p>
      			<input type="email" placeholder="email" class="input">
            <textarea name="" class='textarea'></textarea>
      		</p>
          <button class="button">kirim &rarr; </button>
      	</div>
    </div>
  </div>
<? @include("_layout/_footer.php") ?>
