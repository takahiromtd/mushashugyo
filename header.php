<!doctype html>
<html lang="ja">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/feature.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/mixitup.min.js"></script>

	<script src="//use.typekit.net/vtq4rbj.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<title><?php bloginfo('name'); ?></title>
	<?php get_template_part('header-tags'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '747695848661902',
				xfbml      : true,
				version    : 'v3.3'
			});
			FB.AppEvents.logPageView();
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.async = true;
			js.src = "https://connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.3&appId=747695848661902"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWCDBS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header class="fixed-top bg-white">
			<nav class="navbar navbar-expand-lg container navbar-light pt-4 pb-4">
				<a class="navbar-brand" href="/"><img class="" src="<?php bloginfo('template_directory'); ?>/img/mushashugyo-logo-yu.png" alt="海外ビジネス武者修行プログラム" width="240px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp" href="/about">武者修行とは？</a></li>
							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp" href="/about/ex">得られること</a></li>
							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp" href="/about/hoian">店舗情報</a></li>
							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp" href="about/facilitator">ファシリテーター</a></li>
							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp nav-link-sp-bottom" href="/column">参加学生の声</a></li>
							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp nav-link-sp-bottom" href="/forparents">保護者の方へ</a></li>
<!-- 							<li class="nav-item header-menu-list mb-0"><a class="nav-link nav-link-sp nav-link-sp-bottom" href="https://next.mushashugyo.jp">学びのプラットフォーム</a></li> -->
						</ul>

						<?php $url = $_SERVER['REQUEST_URI']; ?>
						<?php if(strstr($url,'sche')): ?>
							<a class="box-shadow text-center header-sq-btn btn btn-danger btn-round btn-block text-white my-2 my-sm-0 header-entry-sp" href="/sche">無料オンライン説明会&emsp;<i class="fas fa-chevron-right"></i></a>
							<?php else: ?>
								<a class="box-shadow text-center header-sq-btn btn btn-danger btn-round btn-block text-white my-2 my-sm-0 header-entry-sp" href="/sche">無料オンライン説明会&emsp;<i class="fas fa-chevron-right"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</nav>
			</header>
			<div class="bg-opacity bg-light">
				<div class="d-none d-md-block container">
					<ul class="nav justify-content">
						<li class="nav-item header-menu-list-sub">
							<a class="nav-link text-dark pl-0" href="https://mushashugyo.jp/news/20200728/" target="_blank">News：オンライン武者修行 追加開催決定！</a>
						</li>
					</ul>
				</div>
			</div>