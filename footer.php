<footer class="">
	<div class="bg-dark pt-5 pb-5">
		<div class="container">
			<div class="row pt-5 pb-5">
				<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
					<h6 class="text-light">SITEMAP</h6>
					<div class="row">
						<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pb-5">
							<ul>
								<li><a alt="#" href="/">トップ</a></li>
								<li><a alt="#" href="/about">武者修行とは？</a></li>
								<li><a alt="#" href="/sche">説明会会場・日程</a></li>
								<li><a alt="#" href="/about/hoian">開催地ベトナム</a></li>
								<li><a alt="#" href="about/facilitator">ファシリテーター</a></li>
								<li><a alt="#" href="/column">参加学生の声</a></li>
								<li><a alt="#" href="/qas">よくある質問</a></li>
							</ul>
						</div>
						<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 pb-5">
							<ul>
								<!-- <li><a alt="#" href="/parents">保護者の方へ</a></li> -->
								<!-- <li><a alt="#" href="/forgroups">教育機関・企業の方へ</a></li> -->
								<!-- <li><a alt="#" href="/company/story">武者修行にかける思い</a></li> -->
								<li><a alt="#" href="/news">ニュース メディア情報</a></li>
								<li><a alt="#" href="/company">運営会社情報</a></li>
								<li><a alt="#" href="/contact">お問い合わせ</a></li>
								<li><a alt="/privacy" href="/privacy">プライバシーポリシー</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
					<h6 class="text-light">COMPANY</h6>
					<p class="text-white">株式会社旅武者</p>
					<p class="text-white">〒169-0051 東京都 新宿区西 早稲田 1-22-3<br>早稲田大学ｲﾝｷｭﾍﾞｰｼｮﾝｾﾝﾀｰ内</p>
					<p class="text-white">〒113-0034 東京都 文京区 湯島 2-33-11 岡田ビル2F</p>
					<p class="text-white">Phone:03-6803-0927(営業時間：10:00-19:00)</p>
					<p class="text-white">Mail: info@tabimusha.com</p>
					<p class="text-white"><small>＊2017年4月〜2018年3月期間、斡旋を除く受入れ人数実績（当社調べ）</small></p>
				</div>
			</div>
		</div>
	</footer>
	<div class="bg-light pt-1 pb-1">
		<p class="text-center">© Tabimusha, Inc.</p>
	</div>
	<?php if ( is_home() || is_front_page() ) : ?>
		<p id="sp-footer"><a href="/sche" class="btn btn-danger btn-entry btn-block text-white btn-sharp btn-shadow fixed-bottom d-md-none d-xs-block d-md-none pt-4 pb-4">説明会に参加する</a></p>
		<style>@media (max-width: 576px) {body{ padding-bottom: 56px; }}</style>
	<?php endif; ?>
	<?php if ( is_home() || is_front_page() ) : ?>
	<?php endif; ?>
	<script type="text/javascript">
		jQuery(function($){
			$(document).ready(function(){
				$('.slick-slide-img').slick({
					accessibility: true,
					autoplay: true,
					autoplaySpeed: 2000,
					infinite: true,
					speed: 3000,
					slidesToShow: 3,
					slidesToScroll: 3,
					centerMode: true,
					centerPadding: '0px',
					variableWidth: true,
					initialSlide: 2,
					responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 3,
							slidesToScroll: 3,
							infinite: true,
							dots: true
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					}
					]
				});
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {
	    var footerBtn = $('#sp-footer');
	    footerBtn.hide();
	    //スクロールが100に達したらボタン表示
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 100) {
	            footerBtn.fadeIn();
	        } else {
	            footerBtn.fadeOut();
	        }
	    });
	    });
		</script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
	<?php get_template_part('footer-tags'); ?>
	<?php wp_footer(); ?>
</body>
</html>



<!-- Copyright ©TABI-MUSHA All Rights Reserved. -->
