<!doctype html>
<html lang="ja">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">
	<?php get_template_part('aa'); ?>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/feature.css">

	<script defer src="//use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.matchHeight-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/mixitup.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	
	<script src="//use.typekit.net/vtq4rbj.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<title><?php bloginfo('name'); ?></title>
	<?php get_template_part('header-tags'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWCDBS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header class="bg-light">
			<nav class="bg-light navbar fixed-top navbar-expand-lg navbar-light">
				<div class="container pt-3 pb-1">
					<a class="navbar-brand" href="/"><img class="mb-3 mr-3 header-logo" src="<?php bloginfo('template_directory'); ?>/img/mushashugyo-logo-yu.png" alt="海外ビジネス武者修行プログラム"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link text-dark font-weight-bold" href="/about">武者修行とは？</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark font-weight-bold" href="/about/ex">得られること</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark font-weight-bold" href="/about/hoian">ベトナムについて</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark font-weight-bold" href="about/facilitator">ファシリテーター</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark font-weight-bold" href="/column">参加学生の声</a>
							</li>
						</ul>
						<?php $url = $_SERVER['REQUEST_URI']; ?>
						<?php if(strstr($url,'sche')): ?>
							<a href="/entry" class="btn btn-danger btn-lg btn-sharp btn-block header-btn my-2 my-sm-0 d-md-none d-md-block d-lg-none">説明会予約フォーム</a>
							<a href="/entry" class="btn btn-danger btn-round btn-shadow btn-lg heade-btn-round my-2 my-sm-0 d-none d-lg-block">説明会予約フォーム</a>
						<?php else: ?>
							<a href="/sche" class="btn btn-danger btn-lg btn-sharp btn-block header-btn my-2 my-sm-0 d-md-none d-md-block d-lg-none">説明会に参加する</a>
							<a href="/sche" class="btn btn-danger btn-round btn-shadow btn-lg heade-btn-round my-2 my-sm-0 d-none d-lg-block">説明会に参加する</a>
						<?php endif; ?>
					</div>
				</div>
			</nav>
		</header>