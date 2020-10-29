<?php /* Template Name: archive-sche.php */ ?>
<?php get_header(); ?>
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
						<h4 class="font-weight-bold text-center">3.説明会へのご説明</h4>
						<div class="mx-auto"><p>パソコンからの参加を推奨しております。Wi-Fiの接続ができる場所、周りが静かな場所からご参加ください。</p></div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-5">
					<div id="entry">
						<section class="mw720 mx-auto d-block p-5">
							<?php echo do_shortcode('[ninja_form id=278]'); ?>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>