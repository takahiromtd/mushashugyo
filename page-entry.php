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
	<div class="jumbotron">
		<h2 class="text-center font-weight-bold">説明会申込み<small class="text-danger">（1分で完了）</small></h2>
		<p class="text-center">プログラム参加者から体験談や本音を聞くことができます。お気軽にご参加ください。</p>
	</div>
	<div class="container pt-5 pb-5">
		<?php if (have_posts()): while (have_posts()) : the_post();?>
			<?php the_content(); ?>
		<?php endwhile; else: echo '記事はありません。'; endif; ?>
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