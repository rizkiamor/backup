<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="Aplikasi Akademik">
		<meta name="keywords" content="aplikasi,akademik,absis">
		<meta name="author" content="bimadev">
		<title>ABSIS - Aplikasi Akademik</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="dist/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="dist/css/style.css" rel="stylesheet">
		<link href="dist/css/style-responsive.css" rel="stylesheet">
		<script>
			// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-62650664-1', 'auto');
			ga('send', 'pageview');

		</script>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

		<body class="tooltips" style="background-color: #F7F9FA">
			<form name="form1" method="post" action="proses.php" class="form-horizontal" role="form">
				<div class="mfp-bg mfp-zoom-in mfp-ready"></div>
				<div class="mfp-wrap  mfp-auto-cursor mfp-zoom-in mfp-ready" tabindex="-1" style="overflow-y: auto; overflow-x: hidden;">
					<div class="mfp-container mfp-s-ready mfp-inline-holder"><div class="mfp-content">
						<div id="pan-download" class="white-popup mfp-with-anim" style="padding-right: 0px;padding-left: 0px;">
							<h2 class="text-center">
								FORM LOGIN
							</h2><br>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                </div>

                  <button type="submit" class="btn btn-primary" name="login">Login</button>


                <div class="col-sm-5">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                </div>
                <br>
						</div>
					</div>
					<div class="mfp-preloader">
					Loading...
					</div>
					</div>
				</div>
			</form>
		</body>
