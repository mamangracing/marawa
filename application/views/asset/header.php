<!DOCTYPE HTML>
<html>
<head>
	<title>MARAWA</title>
	<!--css-->
	<link href="<?= base_url('assets/');?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= base_url('assets/');?>css/style_marawa.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url('assets/');?>css/font-awesome.css" rel="stylesheet">
	<!--css-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="<?= base_url('assets/');?>js/jquery.min.js"></script>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cagliostro&display=swap" rel="stylesheet"> 
	<!--search jQuery-->
		<script src="<?= base_url('assets/');?>js/main.js"></script>
	<!--search jQuery-->
	<script src="<?= base_url('assets/');?>js/responsiveslides.min.js"></script>
	 <script>
	    $(function () {
	      $("#slider").responsiveSlides({
	      	auto: true,
	      	nav: true,
	      	speed: 500,
	        namespace: "callbacks",
	        pager: true,
	      });
	    });
	 </script>
	 <!--mycart-->
	<script type="text/javascript" src="<?= base_url('assets/');?>js/bootstrap-3.1.1.min.js"></script>
	 <!-- cart -->
	<script src="<?= base_url('assets/');?>js/simpleCart.min.js"></script>
	<!-- cart -->
	<!--start-rate-->
	<script src="<?= base_url('assets/');?>js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?= base_url('assets/');?>css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
	<script type="text/javascript">
		jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
	</script>
	<!--//End-rate-->
</head>
<body>
<!--header-->
<nav class="header navbar-fixed-top">
	<div class="header-top">
		<div class="container">
			 <div class="top-left">
				<a href="https://api.whatsapp.com/send?phone=+6281280120231&text=Haloo Bapak / Ibu" target="blank"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> 0812 8012 0231</a>
			</div>
			<div class="top-right">
			<!-- <ul>
				<li><a href="checkout.html">Checkout</a></li>
			</ul> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="heder-bottom">
		<div class="container">
			<div class="logo-nav">
				<div class="logo-nav-left">
					<h1>
						<a href="<?= base_url();?>">
							<img src="<?= base_url('assets/');?>img/LOGO MARAWA.png">
						</a>
					</h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?= base_url();?>" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li><a href="<?= base_url('products');?>">Products</a></li>
							<li><a href="<?= base_url('about');?>">About Us</a></li>
							<li><a href="<?= base_url('sablon');?>">Sablon</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<ul class="cd-header-buttons">
						<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
					</ul> <!-- cd-header-buttons -->
					<div id="cd-search" class="cd-search">
						<form action="#" method="post">
							<input name="Search" type="search" placeholder="Search...">
						</form>
					</div>	
				</div>
				<div class="header-right2">
					<!-- <div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div> -->	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="header-top1"></div>
</nav>
<!--header-->
