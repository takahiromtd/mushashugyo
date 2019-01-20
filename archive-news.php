<?php
/*
Template Name: archive-news.php
*/
?>
<?php get_header(); ?>
<div class="jumbotron">
	<h2 class="text-center font-weight-bold">リリース・メディア情報</h2>
	<p class="text-center">武者修行®に関するニュースリリース</p>
</div>
<div class="container pt-5 pb-5">
	<section id="news" class="mw960 mx-auto d-block">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
				<h3 class="font-weight-bold">お知らせ</h3>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="news-list">
						<time><?php the_time("Y/n/j l"); ?></time>
						<a href="<?php the_permalink(); ?>"><h3 class=""><?php echo mb_substr($post->post_title, 0); ?></h3></a>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
	<section class="mw960 mx-auto d-block">
		<h3 class="font-weight-bold">メディア出演・講演実績</h3>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5">
				<ul>
					<li class="mb-4 font-weight-bold">メディア出演</li>
					<li class="mb-4"><a href="https://toyokeizai.net/articles/-/259354" target="_blank">ベトナム武者修行する日本学生が増える理由　超実践型の海外インターンが人材育成に効果</a><br><a href="https://toyokeizai.net/articles/-/259354" target="_blank">toyokeizai.net/articles/-/259354</a>・・・東洋経済オンライン</li>
					<li class="mb-4"><a href="http://asenavi.com/archives/7760" target="_blank">大学生に「自走式エンジン」を搭載させ、変態させる！ </a><br><a href="http://asenavi.com/archives/7760" target="_blank">asenavi.com/archives/7760</a>・・・アセナビ</li>
					<li class="mb-4"><a href="https://onlystory.co.jp/stories/education/40th/489" target="_blank">学生よ、「自走式エンジン®」を搭載せよ！</a><br><a href="http://onlystory.co.jp/stories/education/40th/489" target="_blank">onlystory.co.jp/stories/education/40th/489</a>・・・オンリーストーリー</li>
					<li class="mb-4">TOKYO FM「Share The World」・・・TOKYO FM</li>
					<li class="mb-4">AERAムック ~2018 大学生と社会人のキャリアを切り拓く・・・TOKYO FM</li>
				</ul>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5">
<!-- 				<ul>
					<li class="mb-4 font-weight-bold">講演実績</li>
					<li><a href="http://asenavi.com/archives/7760">大学生に「自走式エンジン」を搭載させ、変態させる！ </a><br><a href="http://asenavi.com/archives/7760">asenavi.com/archives/7760</a>・・・アセナビ</li>
					<li><a href="http://asenavi.com/archives/7760">大学生に「自走式エンジン」を搭載させ、変態させる！ </a><br><a href="http://asenavi.com/archives/7760">asenavi.com/archives/7760</a>・・・アセナビ</li>
					<li><a href="http://asenavi.com/archives/7760">大学生に「自走式エンジン」を搭載させ、変態させる！ </a><br><a href="http://asenavi.com/archives/7760">asenavi.com/archives/7760</a>・・・アセナビ</li>
				</ul> -->
			</div>
		</div>
	</section>
	<section class="mw960 mx-auto d-block">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
				<h3 class="font-weight-bold">公開情報</h3>
				<div class="pt-5 pb-5">
					<h4 class="font-weight-bold">参加学生数の推移　累計参加者数2,019名</h4>
					<img class="img-fluid mx-auto d-block" src="<?php bloginfo('template_directory'); ?>/img/sankasha-data.png">
				</div>
			</div>
		</div>
		<div class="row">
			
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5">
				<h4 class="font-weight-bold">武者修行®紹介動画</h4>
				<div class="embed-responsive embed-responsive-16by9 mt-5 mb-5">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MGEfDd2G-5o"></iframe>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-5">
				<h4 class="font-weight-bold">ファシリテーター紹介動画</h4>
				<div class="embed-responsive embed-responsive-16by9 mt-5 mb-5">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Eq1pZ1eB6aM"></iframe>
				</div>
			</div>
		</div>
	</section>
</div>
<section class="bg-light pt-0 pb-0">
	<div class="w-50 navigation-left">
		<a class="navigation-btn mx-auto d-block text-center" href="/company" title="運営会社情報">運営会社情報</a>
	</div>
	<div class="w-50 navigation-right">
		<a class="navigation-btn mx-auto d-block text-center" href="/contact" title="お問い合わせ">お問い合わせ</a>
	</div>
</section>
<?php get_template_part('footer-entry'); ?>
<?php get_footer(); ?>