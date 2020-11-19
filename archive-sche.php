<?php /* Template Name: archive-sche.php */ ?>
<!doctype html>
<html lang="ja">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="<?php bloginfo('keywords'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">
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
<body class="pt-0">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWCDBS"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header class="bg-white">
			<nav class="navbar navbar-expand-lg container navbar-light pt-4 pb-4">
				<a class="navbar-brand" href="/"><img class="" src="<?php bloginfo('template_directory'); ?>/img/mushashugyo-logo-yu.png" alt="海外ビジネス武者修行プログラム" width="240px"></a>
			</nav>
		</header>
		<div class="jumbotron">
			<h2 class="text-center font-weight-bold">無料オンライン説明会</h2>
			<p class="text-center">自宅にいながらプログラムの説明会に参加できます。</p>
		</div>
		<div class="container pt-0 pb-5">
			<!-- <p>2019年夏のプログラム開催決定！説明会随時更新中（定員があります。お早めの説明会ご参加を推奨します）</p> -->
			<section id="sche">
				<div class="row pt-4">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
						<h3 class="font-weight-bold text-center">《オンライン説明会の流れ》</h3>
						<div class="row pt-4">
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5">
								<img class="mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/img/calender.jpg" alt="" width="360px">
								<h4 class="font-weight-bold text-center">1.ご希望の日時へお申込み</h4>
								<div class="mx-auto"><p>申込フォームからご希望の日時を選択し無料説明会へお申込ください。所要時間は120分が目安です。</p></div>
							</div>
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5">
								<img class="mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/img/email.jpg" alt="" width="360px">
								<h4 class="font-weight-bold text-center">2.参加方法の案内を確認</h4>
								<div class="mx-auto"><p>担当者よりオンライン説明会への参加方法をメールにてご連絡いたします。当日の接続方法を確認ください。</p></div>
							</div>
							<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5">
								<img class="mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/img/zoom.jpg" alt="" width="360px">
								<h4 class="font-weight-bold text-center">3.説明会へのご参加</h4>
								<div class="mx-auto"><p>パソコンからの参加を推奨しております。Wi-Fiの接続ができる場所、周りが静かな場所からご参加ください。</p></div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
							<div id="entry">
								<section class="mw720 mx-auto d-block">
									<?php echo do_shortcode('[ninja_form id=278]'); ?>
								</section>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="bg-light pt-1 pb-1">
			<p class="text-center">© Tabimusha, Inc.</p>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
	</body>
	</html>